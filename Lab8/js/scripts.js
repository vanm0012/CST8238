// Add hypens to text input
function addHyphen() {
    var t = document.forms['the_form'].elements['the_text'];
      if (t.value.length > 0) {
        t.value = t.value.substring(0,4) + "-" + t.value.substring(4, t.value.length);
      }
}
