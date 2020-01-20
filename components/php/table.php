<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Ptable</title>
    <link href="assets/style.css" rel="stylesheet">
    <script type="text/javascript" src="assets/script.js"></script>
    <script src="assets/jquery-3.4.1.js"></script>
</head>
<body>
    <div class="container" id="container">
    <table class="periodic">
        <tr>
            <td class="col">1</td>
            <td class="tdinvisible"></td>
            <td colspan="10" rowspan="3" class="tdinvisible">
                    <span class="reference">Sorokin Ptable</span></td>
            <td colspan="5" class="tdinvisible">
               
            </td>
            <td class="col">18</td>
        </tr>
        <tr>
            <td class="alkali element"  title="Водород" id="H" onclick="show()">
              <div>
                    <div class="number">1</div>
                    <div class="symbol"><a href="index.html?elem_id=1" onclick="show()">H</a></div>
                    <div class="name">Водород</div>
                    <div class="mass">1.008</div>
                </div>
              </td>
            <td class="col">2</td>
            <td class="col">13</td>
            <td class="col">14</td>
            <td class="col">15</td>
            <td class="col">16</td>
            <td class="col">17</td>
            <td class="noblegas helium element " title="Гелий" id="He" onclick="show()">
                <div>
                    <div class="number">2</div>
                    <div class="symbol">He</div>
                    <div class="name">Гелий</div>
                    <div class="mass">4.003</div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="alkali element" title="Литий" id="Li" onclick="show()">
                <div>
                    <div class="number">3</div>
                    <div class="symbol">Li</div>
                    <div class="name">Литий</div>
                    <div class="mass">6.941</div>
                </div>
            </td>
            <td class="alkaline element" title="Бериллий" id="Be" onclick="show()">
                <div>
                    <div class="number">4</div>
                    <div class="symbol">Be</div>
                    <div class="name">Бериллий</div>
                    <div class="mass">9.012</div>
                </div>
            </td>
            <td class="semimetal element" title="Бор" id="B" onclick="show()">
                <div>
                    <div class="number">5</div>
                    <div class="symbol">B</div>
                    <div class="name">Бор</div>
                    <div class="mass">10.811</div>
                </div>
            </td>
            <td class="nonmetal element" title="Углерод" id="C" onclick="show()">
                <div>
                    <div class="number">6</div>
                    <div class="symbol">C</div>
                    <div class="name">Углерод</div>
                    <div class="mass">12.011</div>
                </div>
            </td>
            <td class="nonmetal element" title="Азот" id="N" onclick="show()">
                <div>
                    <div class="number ">7</div>
                    <div class="symbol ">N</div>
                    <div class="name ">Азот</div>
                    <div class="mass ">14.007</div>
                </div>
            </td>
            <td class="nonmetal element " title="Кислород " id="O" onclick="show()">
                <div>
                    <div class="number ">8</div>
                    <div class="symbol ">O</div>
                    <div class="name ">Кислород</div>
                    <div class="mass ">15.999</div>
                </div>
            </td>
            <td class="halogen element  " title="Фтор " id="element F">
                <div>
                    <div class="number ">9</div>
                    <div class="symbol ">F</div>
                    <div class="name ">Фтор</div>
                    <div class="mass ">18.998</div>
                </div>
            </td>
            <td class=" noblegas element " title="Неон " id="element Ne">
                <div>
                    <div class="number ">10</div>
                    <div class="symbol ">Ne</div>
                    <div class="name ">Неон</div>
                    <div class="mass ">20.180</div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="alkali element " title="Натрий " id="element Na">
                <div>
                    <div class="number ">11</div>
                    <div class="symbol ">Na</div>
                    <div class="name ">Натрий</div>
                    <div class="mass ">22.990</div>
                </div>
            </td>
            <td class="alkaline element" title="Магний " id="element Mg">
                <div>
                    <div class="number ">12</div>
                    <div class="symbol ">Mg</div>
                    <div class="name ">Магний</div>
                    <div class="mass ">24.305</div>
                </div>
            </td>
            <td class="col ">3</td>
            <td class="col ">4</td>
            <td class="col ">5</td>
            <td class="col ">6</td>
            <td class="col ">7</td>
            <td class="col ">8</td>
            <td class="col ">9</td>
            <td class="col ">10</td>
            <td class="col ">11</td>
            <td class="col ">12</td>
            <td class="basicmetal element " title="Алюминий " id="element Al">
                <div>
                    <div class="number ">13</div>
                    <div class="symbol ">Al</div>
                    <div class="name ">Aлюминий</div>
                    <div class="mass ">26.982</div>
                </div>
            </td>
            <td class="semimetal element" title="Кремний " id="element Si">
                <div>
                    <div class="number ">14</div>
                    <div class="symbol ">Si</div>
                    <div class="name ">Кремний</div>
                
                    <div class="mass ">28.086</div>
                    
                </div>
            </td>
            <td class="nonmetal element" title="Фосфор " id="element P">
                <div>
                    <div class="number ">15</div>
                    <div class="symbol ">P</div>
                    <div class="name ">Фосфор</div>
                    <div class="mass ">30.974</div>
                </div>
            </td>
            <td class="nonmetal element " title="Сера " id="element S">
                <div>
                    <div class="number ">16</div>
                    <div class="symbol ">S</div>
                    <div class="name ">Сера</div>
                    <div class="mass ">32.066</div>
                </div>
            </td>
            <td class="halogen element " title="Хлор " id="element Cl">
                <div>
                    <div class="number ">17</div>
                    <div class="symbol ">Cl</div>
                    <div class="name ">Хлор</div>
                    <div class="mass ">35.453</div>
                </div>
            </td>
            <td class="noblegas element" title="Аргон " id="element Ar">
                <div>
                    <div class="number ">18</div>
                    <div class="symbol ">Ar</div>
                    <div class="name ">Аргон</div>
                    <div class="mass ">39.948</div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="alkali element" title="Калий " id="element K">
                <div>
                    <div class="number ">19</div>
                    <div class="symbol ">K</div>
                    <div class="name ">Калий</div>
                    <div class="mass ">39.098</div>
                </div>
            </td>
            <td class="alkaline element" title="Кальций " id="element Ca">
                <div>
                    <div class="number ">20</div>
                    <div class="symbol ">Ca</div>
                    <div class="name ">Кальций</div>
                    <div class="mass ">40.078</div>
                </div>
            </td>
            <td class="transmetal element" title="Скандий " id="element Sc">
                <div>
                    <div class="number ">21</div>
                    <div class="symbol ">Sc</div>
                    <div class="name ">Скандий</div>
                    <div class="mass ">44.956</div>
                </div>
            </td>
            <td class="transmetal element " title="Титан ">
                <div>
                    <div class="number ">22</div>
                    <div class="symbol ">Ti</div>
                    <div class="name ">Tитан</div>
                    <div class="mass ">47.867</div>
                </div>
            </td>
            <td class=" transmetal element " title="Ванадий " >
                <div>
                    <div class="number ">23</div>
                    <div class="symbol ">V</div>
                    <div class="name ">Ванадий</div>
                    <div class="mass ">50.942</div>
                </div>
            </td>
            <td class="transmetal element" title="Хром " >
                <div>
                    <div class="number ">24</div>
                    <div class="symbol ">Cr</div>
                    <div class="name ">Хром</div>
                    <div class="mass ">51.996</div>
                </div>
            </td>
            <td class="transmetal element " title="Марганец " >
                <div>
                    <div class="number ">25</div>
                    <div class="symbol ">Mn</div>
                    <div class="name ">Mаргрнец</div>
                    <div class="mass ">54.938</div>
                </div>
            </td>
            <td class="transmetal element" title="Железо " >
                <div>
                    <div class="number ">26</div>
                    <div class="symbol ">Fe</div>
                    <div class="name ">Железо</div>
                    <div class="mass ">55.845</div>
                </div>
            </td>
            <td class="transmetal element" title="Кобальт" >
                <div>
                    <div class="number ">27</div>
                    <div class="symbol ">Co</div>
                    <div class="name ">Кобальт</div>
                    <div class="mass ">58.933</div>
                </div>
            </td>
            <td class="transmetal element" title="Никель">
                <div>
                    <div class="number ">28</div>
                    <div class="symbol ">Ni</div>
                    <div class="name ">Никель</div>
                    <div class="mass ">58.693</div>
                </div>
            </td>
            <td class="transmetal element" title="Медь " >
                <div>
                    <div class="number ">29</div>
                    <div class="symbol ">Cu</div>
                    <div class="name ">Медь</div>
                    <div class="mass ">63.546</div>
                </div>
            </td>
            <td class="transmetal element" title="Цинк">
                <div>
                    <div class="number ">30</div>
                    <div class="symbol ">Zn</div>
                    <div class="name ">Цинк</div>
                    <div class="mass ">65.38</div>
                </div>
            </td>
            <td class="basicmetal element " title="Галлий " onclick="">
                <div>
                    <div class="number ">31</div>
                    <div class="symbol ">Ga</div>
                    <div class="name ">Галлий</div>
                    <div class="mass ">69.723</div>
                </div>
            </td>
            <td class="semimetal element " title="Германий " id="element H">
                <div>
                    <div class="number ">32</div>
                    <div class="symbol ">Ge</div>
                    <div class="name ">Германий</div>
                    <div class="mass ">72.631</div>
                </div>
            </td>
            <td class="semimetal element" title="Мышьяк " id="element H">
                <div>
                    <div class="number ">33</div>
                    <div class="symbol ">As</div>
                    <div class="name ">Мышьяк</div>
                    <div class="mass ">74.922</div>
                </div>
            </td>
            <td class="nonmetal element" title="Селен " id="element H">
                <div>
                    <div class="number ">34</div>
                    <div class="symbol ">Se</div>
                    <div class="name ">Селен</div>
                    <div class="mass ">78.971</div>
                </div>
            </td>
            <td class="halogen element" title="Бром " id="element H">
                <div>
                    <div class="number ">35</div>
                    <div class="symbol ">Br</div>
                    <div class="name ">Бром</div>
                    <div class="mass ">79.904</div>
                </div>
            </td>
            <td class="noblegas element" title="Криптон " id="element H">
                <div>
                    <div class="number ">36</div>
                    <div class="symbol ">Kr</div>
                    <div class="name ">Криптон</div>
                    <div class="mass ">84.798</div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="alkali element" title="Рубидий" onclick="">
                <div>
                    <div class="number ">37</div>
                    <div class="symbol ">Rb</div>
                    <div class="name ">Рубидий</div>
                    <div class="mass ">84.468</div>
                </div>
            </td>
            <td class="alkaline element" title="Стронций " id="element H">
                <div>
                    <div class="number ">38</div>
                    <div class="symbol ">Sr</div>
                    <div class="name ">Стронций</div>
                    <div class="mass ">87.62</div>
                </div>
            </td>
            <td class="transmetal element " title="Иттрий " id="element H">
                <div>
                    <div class="number ">39</div>
                    <div class="symbol ">Y</div>
                    <div class="name ">Иттрий</div>
                    <div class="mass ">88.906</div>
                </div>
            </td>
            <td class="transmetal element " title="Цирконий " id="element H">
                <div>
                    <div class="number ">40</div>
                    <div class="symbol ">Zr</div>
                    <div class="name ">Цирконий</div>
                    <div class="mass ">91.224</div>
                </div>
            </td>
            <td class="transmetal element" title="Ниобий " id="element H">
                <div>
                    <div class="number ">41</div>
                    <div class="symbol ">Nb</div>
                    <div class="name ">Ниобий</div>
                    <div class="mass ">92.906</div>
                </div>
            </td>
            <td class="transmetal element" title="Молибден " id="element H">
                <div>
                    <div class="number ">42</div>
                    <div class="symbol ">Mo</div>
                    <div class="name ">Молибден</div>
                    <div class="mass ">95.95</div>
                </div>
            </td>
            <td class="transmetal element radio" title="Технеций " id="element H">
                <div>
                    <div class="number ">43</div>
                    
                    <div class="symbol ">Tc</div>
                    <div class="name ">Tехнеций</div>
                    <div class="mass ">98.907</div>
                </div>
            </td>
            <td class="transmetal element" title="Рутений" id="element H">
                <div>
                    <div class="number ">44</div>
                    <div class="symbol ">Ru</div>
                    <div class="name ">Рутений</div>
                    <div class="mass ">101.07</div>
                </div>
            </td>
            <td class="transmetal element" title="Родий" id="element H">
                <div>
                    <div class="number ">45</div>
                    <div class="symbol ">Rh</div>
                    <div class="name ">Родий</div>
                    <div class="mass ">102.906</div>
                </div>
            </td>
            <td class="transmetal element" title="Палладий " id="element H">
                <div>
                    <div class="number ">46</div>
                    <div class="symbol ">Pd</div>
                    <div class="name ">Палладий</div>
                    <div class="mass ">106.42</div>
                </div>
            </td>
            <td class="transmetal element" title="Серебро " id="element H">
                <div>
                    <div class="number ">47</div>
                    <div class="symbol ">Ag</div>
                    <div class="name ">Серебро</div>
                    <div class="mass ">107.868</div>
                </div>
            </td>
            <td class="transmetal element" title="Кадмий " id="element H">
                <div>
                    <div class="number ">48</div>
                    <div class="symbol ">Cd</div>
                    <div class="name ">Кадмий</div>
                    <div class="mass ">112.411</div>
                </div>
            </td>
            <td class="basicmetal element" title="Индий " onclick="">
                <div>
                    <div class="number ">49</div>
                    <div class="symbol ">In</div>
                    <div class="name ">Индий</div>
                    <div class="mass ">114.818</div>
                </div>
            </td>
            <td class="basicmetal element" title="Олово " id="element H">
                <div>
                    <div class="number ">50</div>
                    <div class="symbol ">Sn</div>
                    <div class="name ">Олово</div>
                    <div class="mass ">118.711</div>
                </div>
            </td>
            <td class="semimetal element" title="Сурьма " id="element H">
                <div>
                    <div class="number ">51</div>
                    <div class="symbol ">Sb</div>
                    <div class="name ">Сурьма</div>
                    <div class="mass ">121.760</div>
                </div>
            </td>
            <td class="semimetal element" title="Теллур " id="element H">
                <div>
                    <div class="number ">52</div>
                    <div class="symbol ">Te</div>
                    <div class="name ">Теллур</div>
                    <div class="mass ">127.6</div>
                </div>
            </td>
            <td class="halogen element" title="Иод " id="element H">
                <div>
                    <div class="number ">53</div>
                    <div class="symbol ">I</div>
                    <div class="name ">Иод</div>
                    <div class="mass ">126.904</div>
                </div>
            </td>
            <td class="noblegas  element" title="Ксенон " id="element H">
                <div>
                    <div class="number ">54</div>
                    <div class="symbol ">Xe</div>
                    <div class="name ">Ксенон</div>
                    <div class="mass ">131.294</div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="alkali element" title="Цезий " id="element H">
                <div>
                    <div class="number ">55</div>
                    <div class="symbol ">Cs</div>
                    <div class="name ">Цезий</div>
                    <div class="mass ">132.905</div>
                </div>
            </td>
            <td class="alkaline element " title="Барий " id="element H">
                <div>
                    <div class="number ">56</div>
                    <div class="symbol ">Ba</div>
                    <div class="name ">Барий</div>
                    <div class="mass ">137.328</div>
                </div>
            </td>
             <td class="lanthanide element lanthanum" title="Лантан " onclick="">
                <div>
                    <div class="number ">57</div>
                    <div class="symbol ">La </div>
                    <div class="name ">Лантан</div>
                    <div class="mass ">138.905</div>
                </div>
            </td>
            <td class="transmetal element" title="Гафний " id="element H">
                <div>
                    <div class="number ">72</div>
                    <div class="symbol ">Hf</div>
                    <div class="name ">Гафний</div>
                    <div class="mass ">178.49</div>
                </div>
            </td>
            <td class="transmetal element" title="Тантал " id="element H">
                <div>
                    <div class="number ">73</div>
                    <div class="symbol ">Ta</div>
                    <div class="name ">Tантал</div>
                    <div class="mass ">180.948</div>
                </div>
            </td>
            <td class="transmetal element" title="Вольфрам " >
                <div>
                    <div class="number ">74</div>
                    <div class="symbol ">W</div>
                    <div class="name ">Вольфрам</div>
                    <div class="mass ">183.84</div>
                </div>
            </td>
            <td class="transmetal element  " title="Рений" id="element H">
                <div>
                    <div class="number ">75</div>
                    <div class="symbol ">Re</div>
                    <div class="name ">Рений</div>
                    <div class="mass ">186.207</div>
                </div>
            </td>
            <td class="transmetal element" title="Осмий " id="element H">
                <div>
                    <div class="number ">76</div>
                    <div class="symbol ">Os</div>
                    <div class="name ">Oсмий</div>
                    <div class="mass ">190.23</div>
                </div>
            </td>
            <td class="transmetal element" title="Иридий " id="element H">
                <div>
                    <div class="number ">77</div>
                    <div class="symbol ">Ir</div>
                    <div class="name ">Иридий</div>
                    <div class="mass ">192.217</div>
                </div>
            </td>
            <td class="transmetal element" title="Платина " onclick="">
                <div>
                    <div class="number ">78</div>
                    <div class="symbol ">Pt</div>
                    <div class="name ">Платина</div>
                    <div class="mass ">195.085</div>
                </div>
            </td>
            <td class="transmetal element" title="Золото " id="element H">
                <div>
                    <div class="number ">79</div>
                    <div class="symbol ">Au</div>
                    <div class="name ">Золото</div>
                    <div class="mass ">196.967</div>
                </div>
            </td>
            <td class="transmetal element  " title="Ртуть " id="element H">
                <div>
                    <div class="number ">80</div>
                    <div class="symbol ">Hg</div>
                    <div class="name ">Ртуть</div>
                    <div class="mass ">200.592</div>
                </div>
            </td>
            <td class="basicmetal element" title="Таллий " id="element H">
                <div>
                    <div class="number ">81</div>
                    <div class="symbol ">Tl</div>
                    <div class="name ">Tаллий</div>
                    <div class="mass ">204.383</div>
                </div>
            </td>
            <td class=" basicmetal element" title="Свинец " onclick="">
                <div>
                    <div class="number ">82</div>
                    <div class="symbol ">Pb</div>
                    <div class="name ">Свинец</div>
                    <div class="mass ">207.2</div>
                </div>
            </td>
            <td class="basicmetal element radio" title="Висмут " onclick="">
                <div>
                    <div class="number ">83</div>
                    
                    <div class="symbol ">Bi</div>
                    <div class="name ">Bисмут</div>
                    <div class="mass ">208.980</div>
                </div>
            </td>
            <td class="semimetal element radio" title="Полоний " id="element H">
                <div>
                    <div class="number ">84</div>
                    
                    <div class="symbol ">Po</div>
                    <div class="name ">Полоний</div>
                    <div class="mass ">[208.982]</div>
                </div>
            </td>
            <td class="halogen element radio" title="Астат " id="element H">
                <div>
                    <div class="number ">85</div>
                    
                    <div class="symbol ">At</div>
                    <div class="name ">Астат</div>
                    <div class="mass ">209.987</div>
                </div>
            </td>
            <td class=" noblegas element radio" title="Радон " >
                <div>
                    <div class="number ">86</div>
                   
                    <div class="symbol ">Rn</div>
                    <div class="name ">Радон</div>
                    <div class="mass ">222.018</div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="alkali element radio four" title="Франций " id="element H">
                <div>
                    <div class="number ">87</div>
                    
                    <div class="symbol ">Fr</div>
                    <div class="name ">Франций</div>
                    <div class="mass ">223.020</div>
                </div>
            </td>
            <td class="alkaline element radio" title="Радий " id="element H">
                <div>
                    <div class="number ">88</div>
                   
                    <div class="symbol ">Ra</div>
                    <div class="name ">Радий</div>
                    <div class="mass ">226.025</div>
                </div>
            </td>
            <td class="actinide element radio actinium " title="Актиний " id="element H">
                <div>
                    <div class="number ">89</div>
                   
                    <div class="symbol ">Ac</div>
                    <div class="name ">Aктиний</div>
                    <div class="mass ">227.028</div>
                </div>
            </td>
            <td class="transmetal element radio" title="Резерфордий " id="element H">
                <div>
                    <div class="number ">104</div>
                    
                    <div class="symbol ">Rf</div>
                    <div class="name ">Резерфордий</div>
                    <div class="mass ">[261]</div>
                </div>
            </td>
            <td class="transmetal  element radio" title="Дубний " id="element H">
                <div>
                    <div class="number ">105</div>
                   
                    <div class="symbol ">Db</div>
                    <div class="name ">Дубний</div>
                    <div class="mass ">[262]</div>
                </div>
            </td>
            <td class="transmetal  element radio" title="Сиборгий " id="element H">
                <div>
                    <div class="number ">106</div>
                    
                    <div class="symbol ">Sg</div>
                    <div class="name ">Сиборгий</div>
                    <div class="mass ">[266]</div>
                </div>
            </td>
            <td class="transmetal  element radio" title="Борий " id="element H">
                <div>
                    <div class="number ">107</div>
                    
                    <div class="symbol ">Bh</div>
                    <div class="name ">Борий</div>
                    <div class="mass ">[264]</div>
                </div>
            </td>
            <td class="transmetal  element radio" title="Хассий " id="element H">
                <div>
                    <div class="number ">108</div>
                   
                    <div class="symbol ">Hs</div>
                    <div class="name ">Гассий</div>
                    <div class="mass ">[269]</div>
                </div>
            </td>
            <td class="transmetal  element radio 1" title="Мейтнерий " id="element H">
                <div>
                    <div class="number ">109</div>
                    
                    <div class="symbol ">Mt</div>
                    <div class="name ">Мейтнерий</div>
                    <div class="mass ">[268]</div>
                </div>
            </td>
            <td class="transmetal element radio" title="Дармштадтий " id="element H">
                <div>
                    <div class="number ">110</div>
                    
                    <div class="symbol ">Ds</div>
                    <div class="name ">Дармштадий</div>
                    <div class="mass ">[269]</div>
                </div>
            </td>
            <td class="transmetal  element radio" title="Рентгений " id="element H">
                <div>
                    <div class="number ">111</div>
                   
                    <div class="symbol ">Rg</div>
                    <div class="name ">Рентгений</div>
                    <div class="mass ">[272]</div>
                </div>
            </td>
            <td class="transmetal  element radio" title="Коперниций " id="element H">
                <div>
                    <div class="number ">112</div>
                   
                    <div class="symbol ">Cn</div>
                    <div class="name ">Коперниций</div>
                    <div class="mass ">[277]</div>
                </div>
            </td>
            <td class="basicmetal  element radio" title="Нихоний " id="element H">
                <div>
                    <div class="number ">113</div>
                    
                    <div class="symbol ">Nh</div>
                    <div class="name ">Нихоний</div>
                    <div class="mass ">[284]</div>
                </div>
            </td>
            <td class="basicmetal  element radio" title="Флеровий " id="element H">
                <div>
                    <div class="number ">114</div>
                    
                    <div class="symbol ">Fl</div>
                    <div class="name ">Флеворий</div>
                    <div class="mass ">[289]</div>
                </div>
            </td>
            <td class="basicmetal  element radio" title="Московий " id="element H">
                <div>
                    <div class="number ">115</div>
                    
                    <div class="symbol ">Mc</div>
                    <div class="name ">Московий</div>
                    <div class="mass ">[289]</div>
                </div>
            </td>
            <td class="basicmetal  element radio" title="Ливерморий " id="element H">
                <div>
                    <div class="number ">116</div>
                    
                    <div class="symbol ">Lv</div>
                    <div class="name ">Ливерморий</div>
                    <div class="mass ">[298]</div>
                </div>
            </td>
            <td class="halogen element radio" title="Теннисин " id="element H">
                <div>
                    <div class="number ">117</div>
                    
                    <div class="symbol ">Ts</div>
                    <div class="name ">Теннисин</div>
                    <div class="mass ">[294]</div>
                </div>
            </td>
            <td class="noblegas  element radio" title="Оганесон" id="element H">
                <div>
                    <div class="number ">118</div>
                    
                    <div class="symbol ">Og</div>
                    <div class="name ">Оганессон</div>
                    <div class="mass ">[294]</div>
                </div>
            </td>
        </tr>
    </table>

    <br>

    <table class="periodic-1">
        <tr>
            <td class="tilie-1" onclick="">
                <div>
                   <div class="symbol "></div>
                    </div>
            </td>
            <td class="tdinvisible" title="Церий " id="element H">
                <div>
                </div>
            </td>
            <td class="lanthanide element" title="Церий " id="element H">
                <div>
                    <div class="number ">58</div>
                    <div class="symbol ">Ce</div>
                    <div class="name ">Церий</div>
                    <div class="mass ">140.116</div>
                </div>
            </td>
            <td class="lanthanide element" title="Празеодим " id="element H">
                <div>
                    <div class="number ">59</div>
                    <div class="symbol ">Pr</div>
                    <div class="name ">Празеодим</div>
                    <div class="mass ">140.908</div>
                </div>
            </td>
            <td class="lanthanide element" title="Неодим " id="element H">
                <div>
                    <div class="number ">60</div>
                    <div class="symbol ">Nd</div>
                    <div class="name ">Неодим</div>
                    <div class="mass ">144.243</div>
                </div>
            </td>
            <td class="lanthanide  element radio" title="Прометий " id="element H">
                <div>
                    <div class="number ">61</div>
                   
                    <div class="symbol ">Pm</div>
                    <div class="name ">Прометий</div>
                    <div class="mass ">114.913</div>
                </div>
            </td>
            <td class=" lanthanide element" title="Самарий " id="element H">
                <div>
                    <div class="number ">62</div>
                    <div class="symbol ">Sm</div>
                    <div class="name ">Самарий</div>
                    <div class="mass ">150.36</div>
                </div>
            </td>
            <td class=" lanthanide  element" title="Европий " id="element H">
                <div>
                    <div class="number ">63</div>
                    <div class="symbol ">Eu</div>
                    <div class="name ">Европий</div>
                    <div class="mass ">151.964</div>
                </div>
            </td>
            <td class="lanthanide  element" title="Гадолиний " id="element H">
                <div>
                    <div class="number ">64</div>
                    <div class="symbol ">Gd</div>
                    <div class="name ">Гадолиний</div>
                    <div class="mass ">157.25</div>
                </div>
            </td>
            <td class="lanthanide element" title="Тербий " id="element H">
                <div>
                    <div class="number ">65</div>
                    <div class="symbol ">Tb</div>
                    <div class="name ">Тербий</div>
                    <div class="mass ">158.925</div>
                </div>
            </td>
            <td class="lanthanide  element" title="Диспрозий " id="element H">
                <div>
                    <div class="number ">66</div>
                    <div class="symbol ">Dy</div>
                    <div class="name ">Диспрозий</div>
                    <div class="mass ">162.500</div>
                </div>
            </td>
            <td class="lanthanide  element" title="Гольмий " id="element H">
                <div>
                    <div class="number ">67</div>
                    <div class="symbol ">Ho</div>
                    <div class="name ">Гольмий</div>
                    <div class="mass ">164.930</div>
                </div>
            </td>
            <td class="lanthanide  element" title="Эрбий " id="element H">
                <div>
                    <div class="number ">68</div>
                    <div class="symbol ">Er</div>
                    <div class="name ">Эрбий</div>
                    <div class="mass ">167.259</div>
                </div>
            </td>
            <td class="lanthanide  element" title="Тулий " id="element H">
                <div>
                    <div class="number ">69</div>
                    <div class="symbol ">Tm</div>
                    <div class="name ">Тулий</div>
                    <div class="mass ">168.934</div>
                </div>
            </td>
            <td class="lanthanide  element" title="Иттербий " id="element H">
                <div>
                    <div class="number ">70</div>
                    <div class="symbol ">Yb</div>
                    <div class="name ">Иттербий</div>
                    <div class="mass ">173.055</div>
                </div>
            </td>
            <td class="lanthanide  element" title="Лютеций " id="element H">
                <div>
                    <div class="number ">71</div>
                    <div class="symbol ">Lu</div>
                    <div class="name ">Лютеций</div>
                    <div class="mass ">174.967</div>
                </div>
            </td>
            <td class="tilie-1" onclick="">
                <div>
                   <div class="symbol "></div>
                    </div>
            </td>
        </tr>
        <tr>
              <td class="tilie-2"  onclick="">
                <div>
                   <div class="symbol "></div>
                    </div>
            </td>
             
            <td class="tdinvisible" title="Торий " id="element H">
                <div>
                </div>
            </td>
            <td class="actinide element radio " title="Торий " id="element H">
                <div>
                    <div class="number ">90</div>
                    <div class="symbol ">Th</div>
                    <div class="name ">Торий</div>
                    <div class="mass ">232.038</div>
                </div>
            </td>
            <td class="actinide  element radio" title="Протактиний " id="element H">
                <div>
                    <div class="number ">91</div>
                    
                    <div class="symbol ">Pa</div>
                    <div class="name ">Протактиний</div>
                    <div class="mass ">231.036</div>
                </div>
            </td>
            <td class="actinide element radio " title="Уран " id="element H">
                <div>
                    <div class="number ">92</div>
                    
                    <div class="symbol ">U</div>
                    <div class="name ">Уран</div>
                    <div class="mass ">238.029</div>
                </div>
            </td>
            <td class="actinide  element radio" title="Нептуний " id="element H">
                <div>
                    <div class="number ">93</div>
                   
                    <div class="symbol ">Np</div>
                    <div class="name ">Нептуний</div>
                    <div class="mass ">237.048</div>
                </div>
            </td>
            <td class="actinide element radio " title="Плутоний " id="element H">
                <div>
                    <div class="number ">94</div>
                    
                    <div class="symbol ">Pu</div>
                    <div class="name ">Прлутоний</div>
                    <div class="mass ">244.064</div>
                </div>
            </td>
            <td class="actinide  element radio" title="Америций " id="element H">
                <div>
                    <div class="number ">95</div>
                   
                    <div class="symbol ">Am</div>
                    <div class="name ">Америций</div>
                    <div class="mass ">243.061</div>
                </div>
            </td>
            <td class="actinide element radio " title="Кюрий " id="element H">
                <div>
                    <div class="number ">96</div>
                    
                    <div class="symbol ">Cm</div>
                    <div class="name ">Кюрий</div>
                    <div class="mass ">247.070</div>
                </div>
            </td>
            <td class="actinide  element radio" title="Берклий " id="element H">
                <div>
                    <div class="number ">97</div>
                    
                    <div class="symbol ">Bk</div>
                    <div class="name ">Берклий</div>
                    <div class="mass ">247.070</div>
                </div>
            </td>
            <td class="actinide  element radio" title="Калифорний " id="element H">
                <div>
                    <div class="number ">98</div>
                    
                    <div class="symbol ">Cf</div>
                    <div class="name ">Калифорний</div>
                    <div class="mass ">251.080</div>
                </div>
            </td>
            <td class="actinide  element radio" title="Эйнштейний " id="element H">
                <div>
                    <div class="number ">99</div>
                    
                    <div class="symbol ">Es</div>
                    <div class="name ">Эйнштейний</div>
                    <div class="mass ">[254]</div>
                </div>
            </td>
            <td class="actinide element radio " title="Фермий " id="element H">
                <div>
                    <div class="number ">100</div>
                    
                    <div class="symbol ">Fm</div>
                    <div class="name ">Фермий</div>
                    <div class="mass ">257.095</div>
                </div>
            </td>
            <td class="actinide element radio" title="Менделевий " id="element H">
                <div>
                    <div class="number ">101</div>
                    
                    <div class="symbol ">Md</div>
                    <div class="name ">Менделевий</div>
                    <div class="mass ">258.1</div>
                </div>
            </td>
            <td class="actinide element radio " title="Нобелий " id="element H">
                <div>
                    <div class="number ">102</div>
                    
                    <div class="symbol ">No</div>
                    <div class="name ">Нобелий</div>
                    <div class="mass ">259.101</div>
                </div>
            </td>
            <td class="actinide element radio " title="Лоуренсий " id="element H">
                <div>
                    <div class="number ">103</div>
                    
                    <div class="symbol ">Lr</div>
                    <div class="name ">Лоуренсий</div>
                    <div class="mass ">[262]</div>
                </div>
            </td>
            <td class="tilie-1" onclick="">
                <div>
                   <div class="symbol "></div>
                    </div>
            </td>
        </tr>
    </table>
    <br>

    <!--<table class="periodic key" cellspacing="20">
        <tr>
            <td class="cell alkali ">
                <div class="group ">S-Elements</div>
            </td>
            
            <td class=" transmetal ">
                <div class="group ">D-Elements</div>
            </td>
            <td class="cell basicmetal ">
                <div class="group ">P-Elemets</div>
            </td>
            
            <td class=" lanthanide ">
                <div class="group ">Лантаноиды</div>
            </td>
            <td class=" actinide ">
                <div class="group ">Актиноиды</div>
        </tr>
    </table>-->
    </div>
    <div class="breakContainer" id="breakContainer">
    <div class="contentBx" id="contentBx">
        <div class="data" id="data">
        <span id="caption">Element Name</span>
        <div class="crosscontainer">
        <div class="cross cross1" id="cross1"></div>
        <div class="cross cross2" id="cross2"></div>
        </div>
        <input type="checkbox" id="minimizer" onclick="minimize()">
        <input type="checkbox" id="folder" onclick="fold()">
        <div class="breaker" id="breaker"></div>
        </div>
    <div class="content" id="content">
        <p></p>
    </div>
    </div>
    </div>
</body>
</html>