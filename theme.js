$(document).ready(function() {
  var storedTheme = localStorage.getItem('theme');
  if (storedTheme) {
    $("html").attr("data-bs-theme", storedTheme);
    $("input[id='lightSwitch']").prop("checked", storedTheme === "dark");
  }

  $("input[id='lightSwitch']").on("change", function() {
    if ($("html").attr("data-bs-theme") == 'light') {
      localStorage.setItem('theme', 'dark');
      $("html").attr("data-bs-theme", "dark");
    } else if ($("html").attr("data-bs-theme") == "dark") {
      localStorage.setItem('theme', 'light');
      $("html").attr("data-bs-theme", "light");
    }
  });
});
