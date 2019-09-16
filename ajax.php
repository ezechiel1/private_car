<script type="text/javascript">
var XMLHttpRequestObject=false; //creer var
if(window.XMLHttpRequest){
  XMLHttpRequestObject=new XMLHttpRequest();
}else if(window.ActiveXObject){
  XMLHttpRequestObject=new ActiveXObject("Microsoft.XMLHTTP");
}
                //the functionS
                function getTravelInfo(){
                  if(XMLHttpRequestObject){
                    XMLHttpRequestObject.open("POST","class/ajaxControler.php");
                    XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                    XMLHttpRequestObject.onreadystatechange=function(){


                    if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200){
                      var datar=XMLHttpRequestObject.responseText;
                      var divsee=document.getElementById("displayTravel");/// la ou ca va afficher
                      divsee.innerHTML=datar;
                    }
                }
                    //les variables a etre envoyer et utiliser
                    var fromplace=document.getElementById("from_place").value;
                   // var data=report+'|'+stat+'|'+dat1+'|'+dat2+'|'; //pour concatener plusieures variables
                    XMLHttpRequestObject.send("data=" + fromplace); // Send variables
                  }
                  return false;
                }

                function getTravelDestination(){
                  if(XMLHttpRequestObject){
                    XMLHttpRequestObject.open("POST","class/ajaxControler.php");
                    XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                    XMLHttpRequestObject.onreadystatechange=function(){


                    if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200){
                      var datar=XMLHttpRequestObject.responseText;
                      var divsee=document.getElementById("displayTravel_b");/// la ou ca va afficher
                      divsee.innerHTML=datar;
                    }
                }
                    //les variables a etre envoyer et utiliser
                    var toplace=document.getElementById("to_place").value;
                   // var data=report+'|'+stat+'|'+dat1+'|'+dat2+'|'; //pour concatener plusieures variables
                    XMLHttpRequestObject.send("toplace=" + toplace); // Send variables
                  }
                  return false;
                }
</script>
