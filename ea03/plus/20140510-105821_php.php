<?php

// konvencio: PascalCase
// camelCase

// HTML kontrol
class Control {
    public $Id;
    public $Name;
    public $Type; // button, checkbox...
    public $Class;
    public $Click;
    
    function __construct($name,$type="",$class="") {
        $this->Name=$name;
        $this->Id=$name."_id";
        $this->Type=$type;
        $this->Class=$class;
    }
    
    function __toString() {
        return "Name: ".$this->Name." - Type: ".$this->Type." - Class: ".$this->Class;
    }
}

class TextControl extends Control {
    public $Text;
    function __construct($name,$text="empty",$class="") {
        parent::__construct($name, "text", $class);
        $this->Text=$text;
    }
    
    function Render() {
        $html = "";
        $html.="<span id='$this->Id' name='$this->Name'";
        if($this->Class!="") $html.=" class='$this->Class'";
        $html.=">$this->Text</span>";
        print $html;
    }
}

class Button extends TextControl {
    function __construct($name,$text="Button",$class="") {
        parent::__construct($name, $text, $class);
        $this->Type="button";
    }
    
    function Render() {
        $html = "";
        $html.="<input type='button' id='$this->Id' name='$this->Name'";
        if($this->Class!="") $html.=" class='$this->Class'";
        $html.=" value='$this->Text' />";
        print $html;
    }
}


class CheckBox extends TextControl {
    function __construct($name,$text="Checkbox",$class="") {
        parent::__construct($name, $text, $class);
        $this->Type="checkbox";
    }
    
    function Render() {
        $html = "";
        $html.="$this->Text: <input type='checkbox' id='$this->Id' name='$this->Name'";
        if($this->Class!="") $html.=" class='$this->Class'";
        $html.=" value='$this->Text' />";
        print $html;
    }
}


class Table extends TextControl {
    public $Sor;
    public $Oszlop;
    public $Cellak = array();
    
    function __construct($name,$text="Checkbox",$sor=1,$oszlop=1,$class="") {
        parent::__construct($name, $text, $class);
        $this->Type="table";
        $this->Sor=$sor;
        $this->Oszlop=$oszlop;
        for($i=0;$i<$sor;$i++) $this->Cellak[$i]=array();
    }
    
    function AddControl($sor,$oszlop,$control) {
        $this->Cellak[$sor][$oszlop]=$control;
    }
    
    function Render() {
        print "<h2>$this->Text</h2><table border=1>";
        for($i=0;$i<$this->Sor;$i++) {
            print "<tr>";
            for($j=0;$j<$this->Oszlop;$j++) {
                print "<td>";
                if(isset($this->Cellak[$i][$j]))
                    $this->Cellak[$i][$j]->Render();
                else 
                    print "&nbsp;";
                print "</td>";
            }
            print "</tr>";
        }
        print "</table>";
    }
}





