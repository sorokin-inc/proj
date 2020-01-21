<div class="breakContainer" id="breakContainer">
    <div class="contentBx" id="contentBx">
        <div class="data" id="data">
        <span id="caption"><?= $title?></span>
        <div class="crosscontainer">
        <div class="cross cross1" id="cross1"></div>
        <div class="cross cross2" id="cross2"></div>
        </div>
        <input type="checkbox" id="minimizer" onclick="minimize()">
        <input type="checkbox" id="folder" onclick="fold()">
        <div class="breaker" id="breaker"></div>
        </div>
    <div class="content" id="content">
        <p><?= $content?></p>
    </div>
    </div>
    </div>
</body>
</html>