var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

// $(".nav-item").click(function () {
//   $(".accordionWrap").hide();
//   $(this.getAttribute("href")).show();
// });

$(() => {
  $(".tree").on("change", ({ target }) => {
    var $checkbox = $(target);
    var $item = $checkbox.closest("li");

    // Toggle the checked state of the child checkboxes
    $item
      .find("> ul input")
      .prop("checked", target.checked)
      .prop("indeterminate", false);

    // Toggle the checked state of the parent checkboxes
    $item.parents("li").each(function () {
      var $this = $(this);
      var $checkbox = $this.find("> label > input");
      var $children = $this.find("> ul > li > label > input");
      var checkedLength = 0;
      var indeterminateLength = 0;

      $children.each(function () {
        if (this.checked) {
          checkedLength++;
        }

        if (this.indeterminate) {
          indeterminateLength++;
        }
      });

      $checkbox
        .prop("checked", checkedLength === $children.length)
        .prop(
          "indeterminate",
          indeterminateLength > 0 ||
            (checkedLength > 0 && checkedLength < $children.length)
        );
    });
  });
});

$(".nav-item").click(function () {
  $(".accordionWrap").hide();
  $(".nav-item").removeClass("active");
  $(this).addClass("active");
  $(this.getAttribute("href")).fadeIn(650);
  return false;
});

$(".userbtn").click(function () {
  $(".treeWrap").hide();
  $(".userbtn").removeClass("active");
  $(this).addClass("active");
  $(this.getAttribute("href")).fadeIn(650);
  return false;
});

$(".schedbtn").click(function () {
  $(".schedWrap").hide();
  $(".schedbtn").removeClass("active");
  $(this).addClass("active");
  $(this.getAttribute("href")).fadeIn(650);
  return false;
});

var months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December"
];
var date = new Date();

document.getElementById("date").innerHTML =
months[date.getMonth()] + " " + date.getFullYear();

