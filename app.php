<?php
include "header.html";
?>
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script type ="text/javascript">
    
        $(document).ready(function(){
            
            //Read messages from database
            $.ajax({
                type: 'GET',
                url: 'http://192.168.1.146/questbook/read.php',
                success: function(messages) {
                    var data = JSON.parse(messages); 
                    for(i in data){
                        $("#messages").append("<li>" + "<strong>" + data[i].nimi + ":" + "</strong>" + "<br>" + data[i].viesti + '<input type="button" id="delete" value="Poista" data-id="'+ data[i].id +'">' +  "</li>" + "<br>");
                    }
                }
            })
            
            //Write message to database
            $("#add-msg").click(function(){ 
                var $name = $("#name").val(); 
                var $msg = $("#msg").val();
                
                if ($name == "" || $msg == ""){ 
                    alert("Write name and message!");
                }
                else{ 
                    $.ajax({
                        url: 'http://192.168.1.146/questbook/write.php',
                        method: 'POST',
                        dataType: 'text',
                        data: {
                            login: 1,
                            $name: $name,
                            $msg: $msg
                        },
                    success: function(response){ 
                        $("#name").val(""); 
                        $("#msg").val(""); 
                    }
                })
                    
                    //Add id to button and read message new message from database
                    $.ajax({ 
                        type: 'GET',
                        url: 'http://192.168.1.146/questbook/read.php',
                        success: function(messages) {
                            var data2 = JSON.parse(messages);
                            var length = Object.keys(data2).length - 1; 
                            
                            $("#messages").append("<li>" + "<strong>" + $name + ":" + "</strong>" + "<br>" + $msg + '<input type="button" id="delete" value="Poista" data-id="'+ data2[length].id +'">' +  "</li>" + "<br>");
                        }
                    })
            }

        })

            
            //Delete message from database and hide it from webpage
            $(document).on("click", "#delete", function(){
                var $id = $(this).attr("data-id");

                $.ajax({
                    url: 'http://192.168.1.146/questbook/delete.php',
                    method: 'POST',
                    dataType: 'text',
                    data: {
                        login2: 1,
                        $id: $id
                    },
                    success: function(response){
                        
                    }
                })
                $(this).parent('li').hide();
            })

        });
    </script>

<?php 
include "footer.html";
?>