var dateFormat = "mm/dd/yy";
window.addEventListener("load", function () {
    var from = $("#from")
      .datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
      })
      .on("change", function () {
        to.datepicker("option", "minDate", getDate(this));
        $("#from_date").val(getDate(this).toDateString());
        $("#from_date_hidden").val(getDate(this).getTime());
      }),
    to = $("#to")
      .datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
      })
      .on("change", function () {
        from.datepicker("option", "maxDate", getDate(this));
        $("#to_date").val(getDate(this).toDateString());
        $("#to_date_hidden").val(getDate(this).getTime());
      });
});

function getDate(element) {
  var date;
  try {
    date = $.datepicker.parseDate(dateFormat, element.value);
  } catch (error) {
    date = null;
  }
  console.log($.datepicker.parseDate(dateFormat, element.value));
  return date;
}
function showModal() {
  var myModalEl = document.getElementById("myModal");
  var myModal = new bootstrap.Modal(myModalEl, {
    keyboard: false,
  });
  myModal.show();
}
