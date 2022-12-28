function incrementValue()
{
    var value = parseInt(document.getElementById('var-value').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('var-value').value = value;
}

