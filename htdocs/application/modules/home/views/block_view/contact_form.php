<form id="feedInput" class="col s12">
    <div class="row">
        <div class="input-field col s6">
            <input id="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
        </div>
        <div class="input-field col s6">
            <select multiple>
                <optgroup label="team 1">
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                </optgroup>
                <optgroup label="team 2">
                    <option value="3">Option 3</option>
                    <option value="4">Option 4</option>
                </optgroup>
            </select>
            <label>Optgroups</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <textarea id="message" class="materialize-textarea"></textarea>
            <label for="message">message</label>
        </div>
        <div class="col s12">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>
</form>

<div id="feed-container">
</div>

<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content" id="getCode">
        <h4>Modal Header</h4>
        <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>

<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <!-- Modal Form Content -->
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.collapsible').collapsible();
    });

    $(document).ready(function() {
        $('select').material_select();
    });

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });

    $('.modal').modal({
            dismissible: true, // Modal can be dismissed by clicking outside of the modal
            opacity: .5, // Opacity of modal background
            inDuration: 300, // Transition in duration
            outDuration: 200, // Transition out duration
            startingTop: '4%', // Starting top style attribute
            endingTop: '10%', // Ending top style attribute
            ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
                console.log(modal, trigger);
            },
            complete: function() { Materialize.toast('Closed', 4000); } // Callback for Modal close
        }
    );

    $(function(){       // <----------------missed the doc ready function
        $('form').submit(function(e){
            e.preventDefault(); // <------this will restrict the page refresh
            var form_data = {
                name: $('#first_name').val(),
                surname: $('#last_name').val(),
                email: $('#email').val(),
                message: $('#message').val()
            };

            $.ajax({
                url: "<?php echo site_url('home/submit'); ?>",
                type: 'POST',
                data: form_data, // $(this).serialize(); you can use this too
                success: function(msg) {
                    //alert(msg);

                    $("#getCode").html(msg);
                    $("#modal1").modal('open');

                },

                error: function() { Materialize.toast("Error posting feed.", 4000); }

            });
        });
    });
</script>