<!-- <!DOCTYPE html>
    <html>
        <head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>     
        </head>
        <body> -->
            <textarea id="display" style="width:1000px;height:1000px"></textarea>
            <script>
                var parsed = "";
                var myObject = [{
                    firstname: "Jane",
                    lastname: "Doe",
                    email: "jdoe@email.com"
                }, {
                    firstname: "Ja",
                    lastname: "joe",
                    email: "je@email.com"
                }, {
                    firstname: "Janet",
                    lastname: "joes",
                    email: "jsse@email.com"
                }];
                for (i = 0; i< myObject.length; i++) {
                    var myobj=  myObject[i];
                    for (var property in myobj) {
                        parsed += property + ": " + myobj[property] + "\n";          
                    }
                }                           
                $("#display").val(parsed);            
            </script>
        <!-- </body>
    </html> -->