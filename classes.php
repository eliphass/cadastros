<?PHP

define("DBHOST","mysql.weblink.com.br");
define("DBUSER","u746411670_vd");
define("DBPASS","2031701");
define("DBNAME","u746411670_vd");

class Usuario {

    function Usuario($cns) {
        $mysqli = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME) or die($mysqli->error());

        $result = $mysqli->query("SELECT * FROM usuario WHERE cns = '".$cns."'") or die($mysqli->error());

        $row = $result->fetch_assoc();

        $this->cns = $row['cns'];
        $this->npf = $row['npf'];
        $this->npi = $row['npi'];
        $this->nome = mb_strtoupper($row['nome']);
        $this->sexo = $row['sexo'];
        /*$this->nascimento = $row['nascimento'];*/
        $this->nascimentoiso = $row['nascimentoiso'];
        $this->desnutricao = $row['desnutricao'];
        $this->reabilitacao = $row['reabilitacao'];
        $this->hipertensao = $row['hipertensao'];
        $this->diabetes = $row['diabetes'];
        $this->asma = $row['asma'];
        $this->dpoc = $row['dpoc'];
        $this->cancer = $row['cancer'];
        $this->outrasdc = $row['outrasdc'];
        $this->hanseniase = $row['hanseniase'];
        $this->tuberculose = $row['tuberculose'];
        $this->tabagista = $row['tabagista'];
        $this->acamado = $row['acamado'];
        $this->domiciliado = $row['domiciliado'];
        $this->vulnerabilidade = $row['vulnerabilidade'];
        $this->saudemental = $row['saudemental'];
        $this->alcool = $row['alcool'];
        $this->outrasdrogas = $row['outrasdrogas'];
        $this->rg_num = $row['rg_num'];
        $this->rg_oe = $row['rg_oe'];
        $this->rg_uf = $row['rg_uf'];
        $this->cpf = $row['cpf'];
        $this->telefone = $row['telefone'];
        $this->npcs3 = $row['npcs3'];
        $this->gestante = $row['gestante'];
        $this->dpp = $row['dpp'];
        $this->responsavel = $row['responsavel'];
        
        if($this->sexo=="M"){
            $this->sexo = "male";
        } else {
            $this->sexo = "female";
        }
        
        list($ano,$mes,$dia) = explode("-",$this->nascimentoiso);
        $this->nascimento = new DateTime();
        $this->nascimento->setDate($ano,$mes,$dia);
        
        $this->cnsChunk =chunk_split($this->cns,3," ");

    }
    
    function iconCheck($var){
        if($var){
            return "check-";
        } else {
            return "";
        }
    }

}

class Familia {
    
    function Familia($npf){
        $mysqli = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME) or die($mysqli->error());

        $result = $mysqli->query("SELECT cns FROM usuario WHERE npf = '".$npf."' ORDER BY npi ASC;") or die($mysqli->error());
        
        $this->pessoas = 0;
        $this->membros = array();
        $this->hipertensao = 0;
        $this->diabetes = 0;
        $this->gestante = 0;
        
        $membros = array();
        while($row = $result->fetch_assoc()){
            $usuario = new Usuario($row['cns']);
            
            $this->membros[] = $usuario->cns;
            if($usuario->hipertensao) $this->hipertensao = 1;
            if($usuario->diabetes) $this->diabetes = 1;
            if($usuario->gestante) $this->gestante = 1;
            
            if($usuario->responsavel){
                $this->responsavel = new Usuario($usuario->cns);
            }
        }
        
        $this->npf = $npf;
        $this->pessoas = count($this->membros);
    }
}

class Profissional {

    function Profissional($cns) {
        $mysqli = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME) or die($mysqli->error());

        $result = $mysqli->query("SELECT * FROM profissional WHERE cns = '".$cns."'") or die($mysqli->error());

        $row = $result->fetch_assoc();

        $this->cns = $row['cns'];
        $this->nome = mb_strtoupper($row['nome']);
        $this->cbo = $row['cbo'];
        $this->cnes = $row['cnes'];
        $this->ine = $row['ine'];
        $this->cpf = $row['cpf'];
        $this->prefixo = $row['prefixo'];
        $this->username = $row['username'];
        $this->microarea = $row['microarea'];
        
        $this->cnsChunk =chunk_split($this->cns,3," ");

    }

}

?>