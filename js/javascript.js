var values = [1, 50, 50];
$('#slider1').change(function() {
    $('span').text(values[this.value]);
});