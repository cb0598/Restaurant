<!DOCTYPE html>
<html lang="en">
<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <div class="container">
            <div class="navbar-text pull-left">
                <p>© 2018 Restaurant Plöck</p>
            </div>
            <div class="navbar-text pull-right">
                <?php if (isset($_COOKIE['userName']) && $_COOKIE['isMitarbeiter'] == "false") {
                    echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#openModal'>Bedienung rufen</button>";
                }?>
                <a href="impressum.html">Impressum</a>
                <br>
                <p></p>
                <a id="bedienungGerufen"></a>
            </div>
        </div>
    </div>

        <!-- Modal -->
        <div class="modal fade" id="openModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h2 class="modal-title">Haben Sie einen Wunsch?</h2>
              </div>
              <div class="modal-body">

                    <div class="well" style="font-size: 16px">
                        <p>Bei Fragen jeglicher Art oder bei einem weiterem Wunsch können Sie gerne die Bedienung rufen.</p>
                        <p>Eine Bedienung wird zu Ihnen kommen sobald es möglich ist!</p>
                 
                    <br>

                    <button type="button"" class="btn btn-primary" data-dismiss="modal" onclick="setWeitererWunsch()">Bedienung rufen</button>
                   
             
              </div>
            </div>
          </div>
        </div>
    </div>

        <script>
            function setWeitererWunsch(){
                $.ajax({
                    url: "weitererWunsch.php",
                    method: "GET",
                    data: {  },
                    success: data => {
                        document.getElementById('bedienungGerufen').innerHTML = "Bedienung ist informiert!";
                    }
                })
            }
        </script>
</html>