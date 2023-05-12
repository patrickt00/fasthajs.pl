$(document).ready(function() {
  var storedTheme = localStorage.getItem('theme');
  if (storedTheme) {
    $("html").attr("data-bs-theme", storedTheme);
    $("input[id='lightSwitch']").prop("checked", storedTheme === "dark");
    updateBackgroundClass(storedTheme);
  }

  $("input[id='lightSwitch']").on("change", function() {
    var currentTheme = $("html").attr("data-bs-theme");
    var newTheme = currentTheme === 'light' ? 'dark' : 'light';
    localStorage.setItem('theme', newTheme);
    $("html").attr("data-bs-theme", newTheme);
    updateBackgroundClass(newTheme);
  });

  function updateBackgroundClass(theme) {
    var navbar = $(".navbar");
    navbar.removeClass("bg-" + (theme === "light" ? "dark" : "light")).addClass("bg-" + theme);
  }
});
