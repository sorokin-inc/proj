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
}
function massFilter() {
    massBox = document.getElementById('massbox');
    masses = document.getElementsByClassName('mass');
    masscell = document.getElementById('massCell');
    isChecked = (massBox.checked) ? true : false;
    if(massBox.checked) {
        masscell.className = "actmasscell";
        for(let i = 0; i < 7; i++) {
        for (let mass of masses) {
            mass.className = "massDis";
          }
        }
    } else { 
        massBox = document.getElementById('massbox');
        masses = document.getElementsByClassName('massDis');
        masscell = document.getElementById('massCell');
        masscell.className = "cell";
        for(let i = 0; i < 7; i++) {
        for (let mass of masses) {
            mass.className = "mass";
          }
        }
    }
}

function numFilter() {
    numBox = document.getElementById('numbox');
    nums = document.getElementsByClassName('number');
    numcell = document.getElementById('numCell');
    isChecked = (numBox.checked) ? true : false;
    if(numBox.checked) {
        numcell.className = "actnumcell";
        for(let i = 0; i < 7; i++) {
        for (let num of nums) {
            num.className = "numDis";
          }
        }
        } else { 
        numBox = document.getElementById('numbox');
        nums = document.getElementsByClassName('numDis');
        numcell = document.getElementById('numCell');
        numcell.className = "cell"
        for(let i = 0; i < 7; i++) {
        for (let num of nums) {
            num.className = "number";
        }
          }
    }
}

function nameFilter() {
    namecell = document.getElementById('nameCell');
    nameBox = document.getElementById('namebox');
    names = document.getElementsByClassName('name');
    isChecked = (nameBox.checked) ? true : false;
    if(nameBox.checked) {
        namecell.className = "actnamecell";
        for(let i = 0; i < 7; i++) {
        for (let name of names) {
            name.className = "nameDis";
          }
        }
    } else { 
        namecell = document.getElementById('nameCell');
        namecell.className = "cell";
        nameBox = document.getElementById('namebox');
        names = document.getElementsByClassName('nameDis');
        for(let i = 0; i < 7; i++) {
        for (let name of names) {
            name.className = "name";
          }
        }
    }}