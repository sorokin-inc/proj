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
        breaker.className = "breaker";
        contentBx.className = "contentBx";
    }
}
function minimize() {
    breaker = document.getElementById('breaker');
    contentBx = document.getElementById('contentBx');
    minimizer = document.getElementById('minimizer');
    content = document.getElementById('content');
    data = document.getElementById('data');
    isChecked = (minimizer.checked) ? true : false;
    if (minimizer.checked) {
        breaker.className = "minBr";
        contentBx.className = "minContentBx";
        content.className = "minContent";
    } else {
        breaker = document.getElementById('breaker');
        contentBx = document.getElementById('contentBx');
        breaker.className = "breaker";
        contentBx.className = "contentBx";
        content.className = "content";
    }
}
function show() {
    brC = document.getElementById('breakContainer');
    brC.className = "breakVisible";
    breaker.className = "breaker";
    contentBx.className = "contentBx";
    content.className = "content";
    /*document.querySelector('.periodic').addEventListener('click', function(e) {
        var id = e.target.id;
        alert(id);
      });*/

}

