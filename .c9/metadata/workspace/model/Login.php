{"filter":false,"title":"Login.php","tooltip":"/model/Login.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":21,"column":0},"end":{"row":21,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":3,"state":"php-start","mode":"ace/mode/php"}},"hash":"a948ac279f9d5da51827381faf24a8ae5c0de54e","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":24,"column":45},"end":{"row":24,"column":46},"action":"remove","lines":["p"],"id":174}],[{"start":{"row":24,"column":45},"end":{"row":24,"column":49},"action":"remove","lines":["html"],"id":175},{"start":{"row":24,"column":45},"end":{"row":24,"column":46},"action":"insert","lines":["p"]}],[{"start":{"row":24,"column":46},"end":{"row":24,"column":47},"action":"insert","lines":["h"],"id":176}],[{"start":{"row":24,"column":47},"end":{"row":24,"column":48},"action":"insert","lines":["p"],"id":177}],[{"start":{"row":24,"column":12},"end":{"row":24,"column":51},"action":"remove","lines":[" header('location: ../view/login.php');"],"id":178}],[{"start":{"row":14,"column":30},"end":{"row":14,"column":53},"action":"remove","lines":["Hash::create('sha256', "],"id":180}],[{"start":{"row":14,"column":48},"end":{"row":14,"column":56},"action":"remove","lines":[", Dawid)"],"id":181}],[{"start":{"row":16,"column":27},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":182}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":1},"action":"insert","lines":["e"],"id":183}],[{"start":{"row":17,"column":1},"end":{"row":17,"column":2},"action":"insert","lines":["c"],"id":184}],[{"start":{"row":17,"column":2},"end":{"row":17,"column":3},"action":"insert","lines":["h"],"id":185}],[{"start":{"row":17,"column":3},"end":{"row":17,"column":4},"action":"insert","lines":["o"],"id":186}],[{"start":{"row":17,"column":4},"end":{"row":17,"column":5},"action":"insert","lines":[" "],"id":187}],[{"start":{"row":17,"column":5},"end":{"row":17,"column":6},"action":"insert","lines":["$"],"id":188}],[{"start":{"row":17,"column":6},"end":{"row":17,"column":7},"action":"insert","lines":["c"],"id":189}],[{"start":{"row":17,"column":7},"end":{"row":17,"column":8},"action":"insert","lines":["o"],"id":190}],[{"start":{"row":17,"column":8},"end":{"row":17,"column":9},"action":"insert","lines":["u"],"id":191}],[{"start":{"row":17,"column":9},"end":{"row":17,"column":10},"action":"insert","lines":["n"],"id":192}],[{"start":{"row":17,"column":10},"end":{"row":17,"column":11},"action":"insert","lines":["t"],"id":193}],[{"start":{"row":17,"column":11},"end":{"row":17,"column":12},"action":"insert","lines":[";"],"id":194}],[{"start":{"row":17,"column":6},"end":{"row":17,"column":11},"action":"remove","lines":["count"],"id":195},{"start":{"row":17,"column":6},"end":{"row":17,"column":7},"action":"insert","lines":["d"]}],[{"start":{"row":17,"column":7},"end":{"row":17,"column":8},"action":"insert","lines":["a"],"id":196}],[{"start":{"row":17,"column":8},"end":{"row":17,"column":9},"action":"insert","lines":["t"],"id":197}],[{"start":{"row":17,"column":9},"end":{"row":17,"column":10},"action":"insert","lines":["a"],"id":198}],[{"start":{"row":17,"column":10},"end":{"row":17,"column":12},"action":"insert","lines":["[]"],"id":199}],[{"start":{"row":17,"column":11},"end":{"row":17,"column":13},"action":"insert","lines":["''"],"id":200}],[{"start":{"row":17,"column":12},"end":{"row":17,"column":13},"action":"insert","lines":["l"],"id":201}],[{"start":{"row":17,"column":13},"end":{"row":17,"column":14},"action":"insert","lines":["o"],"id":202}],[{"start":{"row":17,"column":14},"end":{"row":17,"column":15},"action":"insert","lines":["g"],"id":203}],[{"start":{"row":17,"column":15},"end":{"row":17,"column":16},"action":"insert","lines":["i"],"id":204}],[{"start":{"row":17,"column":16},"end":{"row":17,"column":17},"action":"insert","lines":["n"],"id":205}],[{"start":{"row":17,"column":12},"end":{"row":17,"column":17},"action":"remove","lines":["login"],"id":206},{"start":{"row":17,"column":12},"end":{"row":17,"column":13},"action":"insert","lines":["r"]}],[{"start":{"row":17,"column":13},"end":{"row":17,"column":14},"action":"insert","lines":["o"],"id":207}],[{"start":{"row":17,"column":14},"end":{"row":17,"column":15},"action":"insert","lines":["l"],"id":208}],[{"start":{"row":17,"column":15},"end":{"row":17,"column":16},"action":"insert","lines":["e"],"id":209}],[{"start":{"row":17,"column":10},"end":{"row":17,"column":18},"action":"remove","lines":["['role']"],"id":210}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":11},"action":"remove","lines":["echo $data;"],"id":211}],[{"start":{"row":13,"column":0},"end":{"row":14,"column":50},"action":"remove","lines":["$stmt->bindParam(':login', $_POST['login']);","$stmt->bindParam(':password', $_POST['password']);"],"id":225},{"start":{"row":13,"column":0},"end":{"row":18,"column":10},"action":"insert","lines":["$sth->execute(","            [","            ':login' => $_POST['login'],","            ':password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY),","        ]","        );"]}],[{"start":{"row":13,"column":3},"end":{"row":13,"column":4},"action":"remove","lines":["h"],"id":226},{"start":{"row":13,"column":3},"end":{"row":13,"column":4},"action":"insert","lines":["m"]}],[{"start":{"row":13,"column":4},"end":{"row":13,"column":5},"action":"insert","lines":["t"],"id":227}],[{"start":{"row":16,"column":70},"end":{"row":16,"column":87},"action":"remove","lines":["HASH_PASSWORD_KEY"],"id":229},{"start":{"row":16,"column":70},"end":{"row":16,"column":71},"action":"insert","lines":["D"]}],[{"start":{"row":16,"column":71},"end":{"row":16,"column":72},"action":"insert","lines":["a"],"id":230}],[{"start":{"row":16,"column":72},"end":{"row":16,"column":73},"action":"insert","lines":["w"],"id":231}],[{"start":{"row":16,"column":73},"end":{"row":16,"column":74},"action":"insert","lines":["i"],"id":232}],[{"start":{"row":16,"column":74},"end":{"row":16,"column":75},"action":"insert","lines":["d"],"id":233}],[{"start":{"row":16,"column":70},"end":{"row":16,"column":75},"action":"remove","lines":["Dawid"],"id":240},{"start":{"row":16,"column":70},"end":{"row":16,"column":71},"action":"insert","lines":["$"]}],[{"start":{"row":16,"column":71},"end":{"row":16,"column":72},"action":"insert","lines":["s"],"id":241}],[{"start":{"row":16,"column":72},"end":{"row":16,"column":73},"action":"insert","lines":["a"],"id":242}],[{"start":{"row":16,"column":73},"end":{"row":16,"column":74},"action":"insert","lines":["l"],"id":243}],[{"start":{"row":16,"column":74},"end":{"row":16,"column":75},"action":"insert","lines":["t"],"id":244}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"insert","lines":["$"],"id":245}],[{"start":{"row":12,"column":1},"end":{"row":12,"column":2},"action":"insert","lines":["s"],"id":246}],[{"start":{"row":12,"column":2},"end":{"row":12,"column":3},"action":"insert","lines":["a"],"id":247}],[{"start":{"row":12,"column":3},"end":{"row":12,"column":4},"action":"insert","lines":["l"],"id":248}],[{"start":{"row":12,"column":4},"end":{"row":12,"column":5},"action":"insert","lines":["t"],"id":249}],[{"start":{"row":12,"column":5},"end":{"row":12,"column":6},"action":"insert","lines":[" "],"id":250}],[{"start":{"row":12,"column":6},"end":{"row":12,"column":7},"action":"insert","lines":["="],"id":251}],[{"start":{"row":12,"column":7},"end":{"row":12,"column":8},"action":"insert","lines":[" "],"id":252}],[{"start":{"row":12,"column":8},"end":{"row":12,"column":10},"action":"insert","lines":["\"\""],"id":253}],[{"start":{"row":12,"column":9},"end":{"row":12,"column":10},"action":"insert","lines":["D"],"id":254}],[{"start":{"row":12,"column":10},"end":{"row":12,"column":11},"action":"insert","lines":["a"],"id":255}],[{"start":{"row":12,"column":11},"end":{"row":12,"column":12},"action":"insert","lines":["w"],"id":256}],[{"start":{"row":12,"column":12},"end":{"row":12,"column":13},"action":"insert","lines":["i"],"id":257}],[{"start":{"row":12,"column":13},"end":{"row":12,"column":14},"action":"insert","lines":["d"],"id":258}],[{"start":{"row":12,"column":15},"end":{"row":12,"column":16},"action":"insert","lines":[";"],"id":259}],[{"start":{"row":16,"column":76},"end":{"row":16,"column":77},"action":"remove","lines":[","],"id":265}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":1},"action":"insert","lines":["e"],"id":266}],[{"start":{"row":21,"column":1},"end":{"row":21,"column":2},"action":"insert","lines":["c"],"id":267}],[{"start":{"row":21,"column":2},"end":{"row":21,"column":3},"action":"insert","lines":["h"],"id":268}],[{"start":{"row":21,"column":3},"end":{"row":21,"column":4},"action":"insert","lines":["o"],"id":269}],[{"start":{"row":21,"column":3},"end":{"row":21,"column":4},"action":"remove","lines":["o"],"id":270}],[{"start":{"row":21,"column":2},"end":{"row":21,"column":3},"action":"remove","lines":["h"],"id":271}],[{"start":{"row":21,"column":1},"end":{"row":21,"column":2},"action":"remove","lines":["c"],"id":272}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":1},"action":"remove","lines":["e"],"id":273}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":1},"action":"insert","lines":["e"],"id":274}],[{"start":{"row":21,"column":1},"end":{"row":21,"column":2},"action":"insert","lines":["c"],"id":275}],[{"start":{"row":21,"column":2},"end":{"row":21,"column":3},"action":"insert","lines":["h"],"id":276}],[{"start":{"row":21,"column":3},"end":{"row":21,"column":4},"action":"insert","lines":["o"],"id":277}],[{"start":{"row":21,"column":4},"end":{"row":21,"column":5},"action":"insert","lines":[" "],"id":278}],[{"start":{"row":21,"column":5},"end":{"row":21,"column":6},"action":"insert","lines":["&"],"id":279}],[{"start":{"row":21,"column":5},"end":{"row":21,"column":6},"action":"remove","lines":["&"],"id":280}],[{"start":{"row":21,"column":5},"end":{"row":21,"column":6},"action":"insert","lines":["$"],"id":281}],[{"start":{"row":21,"column":6},"end":{"row":21,"column":7},"action":"insert","lines":["_"],"id":282}],[{"start":{"row":21,"column":7},"end":{"row":21,"column":8},"action":"insert","lines":["P"],"id":283}],[{"start":{"row":21,"column":8},"end":{"row":21,"column":9},"action":"insert","lines":["O"],"id":284}],[{"start":{"row":21,"column":9},"end":{"row":21,"column":10},"action":"insert","lines":["S"],"id":285}],[{"start":{"row":21,"column":10},"end":{"row":21,"column":11},"action":"insert","lines":["T"],"id":286}],[{"start":{"row":21,"column":11},"end":{"row":21,"column":12},"action":"insert","lines":[" "],"id":287}],[{"start":{"row":21,"column":11},"end":{"row":21,"column":12},"action":"remove","lines":[" "],"id":288}],[{"start":{"row":21,"column":5},"end":{"row":21,"column":11},"action":"remove","lines":["$_POST"],"id":289},{"start":{"row":21,"column":5},"end":{"row":21,"column":23},"action":"insert","lines":["$_POST['password']"]}],[{"start":{"row":21,"column":23},"end":{"row":21,"column":24},"action":"insert","lines":[";"],"id":290}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":24},"action":"remove","lines":["echo $_POST['password'];"],"id":291}],[{"start":{"row":29,"column":12},"end":{"row":29,"column":36},"action":"insert","lines":["echo $_POST['password'];"],"id":292}],[{"start":{"row":29,"column":17},"end":{"row":29,"column":35},"action":"remove","lines":["$_POST['password']"],"id":293},{"start":{"row":29,"column":17},"end":{"row":29,"column":65},"action":"insert","lines":["Hash::create('sha256', $_POST['password'], $salt"]}],[{"start":{"row":29,"column":65},"end":{"row":29,"column":66},"action":"insert","lines":[")"],"id":294}],[{"start":{"row":12,"column":9},"end":{"row":12,"column":10},"action":"insert","lines":["s"],"id":295}],[{"start":{"row":12,"column":9},"end":{"row":12,"column":10},"action":"remove","lines":["s"],"id":296}],[{"start":{"row":29,"column":12},"end":{"row":29,"column":67},"action":"remove","lines":["echo Hash::create('sha256', $_POST['password'], $salt);"],"id":303}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":55},"action":"insert","lines":["echo Hash::create('sha256', $_POST['password'], $salt);"],"id":304}],[{"start":{"row":28,"column":10},"end":{"row":31,"column":16},"action":"remove","lines":["else {","            ","            ","        }       "],"id":305}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":55},"action":"remove","lines":["echo Hash::create('sha256', $_POST['password'], $salt);"],"id":306}]]},"timestamp":1456308465000}