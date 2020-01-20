function fold() {
    breaker = document.getElementById('breaker');
    contentBx = document.getElementById('contentBx');
    folder = document.getElementById('folder');
    isChecked = (folder.checked) ? true : false;
    if (folder.checked) {
        breaker.className = "actBr";
        contentBx.className = "actContentBx";
    } else {
        breaker = document.getElementById('breaker');
        contentBx = document.getElementById('contentBx');
        folder = document.getElementById('folder').value;
        breaker.className = "breaker";
        contentBx.className = "contentBx";
    }
}
function minimize() {
    breaker = document.getElementById('breaker');
    contentBx = document.getElementById('contentBx');
    minimizer = document.getElementById('minimizer');
    isChecked = (minimizer.checked) ? true : false;
    if (minimizer.checked) {
        breaker.className = "minBr";
        contentBx.className = "minContentBx";
    } else {
        breaker = document.getElementById('breaker');
        contentBx = document.getElementById('contentBx');
        folder = document.getElementById('folder').value;
        breaker.className = "breaker";
        contentBx.className = "contentBx";
    }
}
