{"filter":false,"title":"login.php","tooltip":"/model/login.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":9,"column":16},"end":{"row":9,"column":20},"action":"insert","lines":["    "],"id":29}],[{"start":{"row":9,"column":20},"end":{"row":9,"column":24},"action":"insert","lines":["    "],"id":30}],[{"start":{"row":9,"column":24},"end":{"row":9,"column":25},"action":"insert","lines":["="],"id":31}],[{"start":{"row":9,"column":24},"end":{"row":9,"column":25},"action":"remove","lines":["="],"id":32}],[{"start":{"row":9,"column":20},"end":{"row":9,"column":24},"action":"remove","lines":["    "],"id":33}],[{"start":{"row":9,"column":20},"end":{"row":9,"column":21},"action":"insert","lines":[" "],"id":34}],[{"start":{"row":6,"column":43},"end":{"row":6,"column":52},"action":"remove","lines":["isactive "],"id":35}],[{"start":{"row":6,"column":42},"end":{"row":6,"column":43},"action":"remove","lines":[" "],"id":36}],[{"start":{"row":6,"column":41},"end":{"row":6,"column":42},"action":"remove","lines":[","],"id":37}],[{"start":{"row":11,"column":17},"end":{"row":11,"column":46},"action":"remove","lines":["'category', $_GET['category']"],"id":38},{"start":{"row":11,"column":17},"end":{"row":11,"column":44},"action":"insert","lines":["':login' => $_POST['login']"]}],[{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"remove","lines":[":"],"id":47}],[{"start":{"row":11,"column":25},"end":{"row":11,"column":27},"action":"remove","lines":["=>"],"id":48}],[{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"remove","lines":[" "],"id":49}],[{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"insert","lines":[","],"id":50}],[{"start":{"row":11,"column":43},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":51}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":43},"action":"insert","lines":["$stmt->bindParam('login', $_POST['login']);"],"id":52}],[{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"insert","lines":[":"],"id":53}],[{"start":{"row":12,"column":17},"end":{"row":12,"column":41},"action":"remove","lines":["'login', $_POST['login']"],"id":54},{"start":{"row":12,"column":17},"end":{"row":12,"column":94},"action":"insert","lines":["':password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY),"]}],[{"start":{"row":12,"column":29},"end":{"row":12,"column":31},"action":"remove","lines":["=>"],"id":55}],[{"start":{"row":12,"column":28},"end":{"row":12,"column":29},"action":"remove","lines":[" "],"id":56}],[{"start":{"row":12,"column":28},"end":{"row":12,"column":29},"action":"insert","lines":[","],"id":57}],[{"start":{"row":12,"column":91},"end":{"row":12,"column":92},"action":"remove","lines":[","],"id":58}],[{"start":{"row":1,"column":32},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":59}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":28},"action":"insert","lines":["require(\"../libs/Hash.php\");"],"id":60}],[{"start":{"row":13,"column":73},"end":{"row":13,"column":90},"action":"remove","lines":["HASH_PASSWORD_KEY"],"id":61},{"start":{"row":13,"column":73},"end":{"row":13,"column":74},"action":"insert","lines":["D"]}],[{"start":{"row":13,"column":74},"end":{"row":13,"column":75},"action":"insert","lines":["a"],"id":62}],[{"start":{"row":13,"column":75},"end":{"row":13,"column":76},"action":"insert","lines":["w"],"id":63}],[{"start":{"row":13,"column":76},"end":{"row":13,"column":77},"action":"insert","lines":["i"],"id":64}],[{"start":{"row":13,"column":77},"end":{"row":13,"column":78},"action":"insert","lines":["d"],"id":65}],[{"start":{"row":16,"column":0},"end":{"row":25,"column":14},"action":"insert","lines":["$count = $sth->rowCount();","        if ($count > 0 && $data['isactive'] === 'Yes') {","            Session::init();","            Session::set('role', $data['role']);","            Session::set('loggedIn', true);","            Session::set('userid', $data['userid']);","            header('location: '.URL.'wordsList');","        } else {","            header('location: '.URL.'index_session');","            ?>"],"id":66}],[{"start":{"row":25,"column":14},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":69},{"start":{"row":26,"column":0},"end":{"row":26,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"remove","lines":[">"],"id":70}],[{"start":{"row":25,"column":12},"end":{"row":25,"column":13},"action":"remove","lines":["?"],"id":71}],[{"start":{"row":17,"column":23},"end":{"row":17,"column":44},"action":"remove","lines":["&& $data['isactive'] "],"id":72}],[{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"remove","lines":["="],"id":73}],[{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"remove","lines":["="],"id":74}],[{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"remove","lines":["="],"id":75}],[{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"remove","lines":[" "],"id":76}],[{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"remove","lines":["'"],"id":77}],[{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"remove","lines":["Y"],"id":78}],[{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"remove","lines":["e"],"id":79}],[{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"remove","lines":["s"],"id":80}],[{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"remove","lines":["'"],"id":81}],[{"start":{"row":17,"column":22},"end":{"row":17,"column":23},"action":"remove","lines":[" "],"id":82}],[{"start":{"row":31,"column":0},"end":{"row":31,"column":1},"action":"insert","lines":["}"],"id":84}],[{"start":{"row":22,"column":37},"end":{"row":22,"column":46},"action":"remove","lines":["wordsList"],"id":85},{"start":{"row":22,"column":37},"end":{"row":22,"column":38},"action":"insert","lines":["l"]}],[{"start":{"row":22,"column":38},"end":{"row":22,"column":39},"action":"insert","lines":["o"],"id":86}],[{"start":{"row":22,"column":39},"end":{"row":22,"column":40},"action":"insert","lines":["g"],"id":87}],[{"start":{"row":22,"column":40},"end":{"row":22,"column":41},"action":"insert","lines":["i"],"id":88}],[{"start":{"row":22,"column":41},"end":{"row":22,"column":42},"action":"insert","lines":["n"],"id":89}],[{"start":{"row":22,"column":42},"end":{"row":22,"column":43},"action":"insert","lines":["."],"id":90}],[{"start":{"row":22,"column":37},"end":{"row":22,"column":43},"action":"remove","lines":["login."],"id":94},{"start":{"row":22,"column":37},"end":{"row":22,"column":38},"action":"insert","lines":["h"]}],[{"start":{"row":22,"column":38},"end":{"row":22,"column":39},"action":"insert","lines":["e"],"id":95}],[{"start":{"row":22,"column":39},"end":{"row":22,"column":40},"action":"insert","lines":["a"],"id":96}],[{"start":{"row":22,"column":40},"end":{"row":22,"column":41},"action":"insert","lines":["d"],"id":97}],[{"start":{"row":22,"column":41},"end":{"row":22,"column":42},"action":"insert","lines":["e"],"id":98}],[{"start":{"row":22,"column":42},"end":{"row":22,"column":43},"action":"insert","lines":["r"],"id":99}],[{"start":{"row":22,"column":43},"end":{"row":22,"column":44},"action":"insert","lines":["."],"id":100}],[{"start":{"row":22,"column":44},"end":{"row":22,"column":45},"action":"insert","lines":["p"],"id":101}],[{"start":{"row":22,"column":45},"end":{"row":22,"column":46},"action":"insert","lines":["h"],"id":102}],[{"start":{"row":22,"column":46},"end":{"row":22,"column":47},"action":"insert","lines":["t"],"id":103}],[{"start":{"row":22,"column":47},"end":{"row":22,"column":48},"action":"insert","lines":["m"],"id":104}],[{"start":{"row":22,"column":48},"end":{"row":22,"column":49},"action":"insert","lines":["l"],"id":105}],[{"start":{"row":24,"column":37},"end":{"row":24,"column":50},"action":"remove","lines":["index_session"],"id":106},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"insert","lines":["l"]}],[{"start":{"row":24,"column":38},"end":{"row":24,"column":39},"action":"insert","lines":["o"],"id":107}],[{"start":{"row":24,"column":39},"end":{"row":24,"column":40},"action":"insert","lines":["g"],"id":108}],[{"start":{"row":24,"column":40},"end":{"row":24,"column":41},"action":"insert","lines":["i"],"id":109}],[{"start":{"row":24,"column":41},"end":{"row":24,"column":42},"action":"insert","lines":["n"],"id":110}],[{"start":{"row":24,"column":42},"end":{"row":24,"column":43},"action":"insert","lines":["."],"id":111}],[{"start":{"row":24,"column":43},"end":{"row":24,"column":44},"action":"insert","lines":["p"],"id":112}],[{"start":{"row":24,"column":44},"end":{"row":24,"column":45},"action":"insert","lines":["h"],"id":113}],[{"start":{"row":24,"column":45},"end":{"row":24,"column":46},"action":"insert","lines":["p"],"id":114}],[{"start":{"row":22,"column":30},"end":{"row":22,"column":37},"action":"remove","lines":["'.URL.'"],"id":115}],[{"start":{"row":22,"column":30},"end":{"row":22,"column":31},"action":"insert","lines":["/"],"id":116}],[{"start":{"row":22,"column":30},"end":{"row":22,"column":31},"action":"insert","lines":["."],"id":117}],[{"start":{"row":22,"column":31},"end":{"row":22,"column":32},"action":"insert","lines":["."],"id":118}],[{"start":{"row":24,"column":30},"end":{"row":24,"column":37},"action":"remove","lines":["'.URL.'"],"id":119}],[{"start":{"row":24,"column":30},"end":{"row":24,"column":31},"action":"insert","lines":["."],"id":120}],[{"start":{"row":24,"column":31},"end":{"row":24,"column":32},"action":"insert","lines":["."],"id":121}],[{"start":{"row":24,"column":32},"end":{"row":24,"column":33},"action":"insert","lines":["/"],"id":122}],[{"start":{"row":24,"column":33},"end":{"row":24,"column":34},"action":"insert","lines":["v"],"id":123}],[{"start":{"row":24,"column":34},"end":{"row":24,"column":35},"action":"insert","lines":["i"],"id":124}],[{"start":{"row":24,"column":35},"end":{"row":24,"column":36},"action":"insert","lines":["e"],"id":125}],[{"start":{"row":24,"column":36},"end":{"row":24,"column":37},"action":"insert","lines":["w"],"id":126}],[{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"insert","lines":["/"],"id":127}],[{"start":{"row":22,"column":33},"end":{"row":22,"column":34},"action":"insert","lines":["v"],"id":128}],[{"start":{"row":22,"column":34},"end":{"row":22,"column":35},"action":"insert","lines":["i"],"id":129}],[{"start":{"row":22,"column":35},"end":{"row":22,"column":36},"action":"insert","lines":["e"],"id":130}],[{"start":{"row":22,"column":36},"end":{"row":22,"column":37},"action":"insert","lines":["w"],"id":131}],[{"start":{"row":22,"column":37},"end":{"row":22,"column":38},"action":"insert","lines":["/"],"id":132}],[{"start":{"row":2,"column":28},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":133}],[{"start":{"row":3,"column":0},"end":{"row":3,"column":28},"action":"insert","lines":["require(\"../libs/Hash.php\");"],"id":134}],[{"start":{"row":3,"column":17},"end":{"row":3,"column":21},"action":"remove","lines":["Hash"],"id":135},{"start":{"row":3,"column":17},"end":{"row":3,"column":18},"action":"insert","lines":["S"]}],[{"start":{"row":3,"column":18},"end":{"row":3,"column":19},"action":"insert","lines":["e"],"id":136}],[{"start":{"row":3,"column":19},"end":{"row":3,"column":20},"action":"insert","lines":["s"],"id":137}],[{"start":{"row":3,"column":20},"end":{"row":3,"column":21},"action":"insert","lines":["s"],"id":138}],[{"start":{"row":3,"column":21},"end":{"row":3,"column":22},"action":"insert","lines":["i"],"id":139}],[{"start":{"row":3,"column":22},"end":{"row":3,"column":23},"action":"insert","lines":["o"],"id":140}],[{"start":{"row":3,"column":23},"end":{"row":3,"column":24},"action":"insert","lines":["n"],"id":141}],[{"start":{"row":11,"column":49},"end":{"row":11,"column":50},"action":"remove","lines":["'"],"id":146}],[{"start":{"row":17,"column":9},"end":{"row":17,"column":13},"action":"remove","lines":["$sth"],"id":147},{"start":{"row":17,"column":9},"end":{"row":17,"column":14},"action":"insert","lines":["$stmt"]}],[{"start":{"row":28,"column":0},"end":{"row":28,"column":15},"action":"remove","lines":["return $result;"],"id":148}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":28,"column":0},"end":{"row":28,"column":15},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1456210614342,"hash":"80b25783bc7e7a9a7755cbc496f3d22a1f70dce8"}