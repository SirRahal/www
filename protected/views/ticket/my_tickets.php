<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 6/23/14
 * Time: 1:02 PM
 */
$this->breadcrumbs=array(
    'My Tickets',
);
    $mytickets = Ticket::model()->get_tickets_by_user_ID();
?>
<head>
    <script>
        $(function() {
            $( "#accordion" ).accordion({
                heightStyle: "content"
            });
        });



        <!--------------------------------------------------------------------------------------------------------------------------------------------------------Working on this code-->
        $(function() {
            var dialog, form,
                name = $( "#name" ),
                email = $( "#email" ),
                password = $( "#password" ),
                allFields = $( [] ).add( name ).add( email ).add( password ),
                tips = $( ".validateTips" );

            function updateTips( t ) {
                tips
                    .text( t )
                    .addClass( "ui-state-highlight" );
                setTimeout(function() {
                    tips.removeClass( "ui-state-highlight", 1500 );
                }, 500 );
            }

            function addUser() {
                var valid = true;
                allFields.removeClass( "ui-state-error" );


                if ( valid ) {
                    $( "#users tbody" ).append( "<tr>" +
                        "<td>" + name.val() + "</td>" +
                        "<td>" + email.val() + "</td>" +
                        "<td>" + password.val() + "</td>" +
                        "</tr>" );
                    dialog.dialog( "close" );
                }
                return valid;
            }

            dialog = $( "#dialog-form" ).dialog({
                autoOpen: false,
                height: 350,
                width: 350,
                modal: true,
                buttons: {
                    "Add Ticket": addUser,
                    Cancel: function() {
                        dialog.dialog( "close" );
                    }
                },
                close: function() {
                    form[ 0 ].reset();
                    allFields.removeClass( "ui-state-error" );
                }
            });

            form = dialog.find( "form" ).on( "submit", function( event ) {
                event.preventDefault();
                addUser();
            });

            $( "#create-user" ).button().on( "click", function() {
                dialog.dialog( "open" );
            });
        });
    </script>

</head>

<div id="dialog-form" title="Add a Ticket">
    <p class="validateTips">Please Enter Ticket Number</p>

    <form>
        <fieldset>
            <label for="ticket_ID">Ticket ID #</label>
            <input type="text" name="ticket_ID" id="ticket_ID" value="123-d3SIR" class="text ui-widget-content ui-corner-all" title="You can find this on the bottom right hand side of your ticket">
            <img src="/images/faq-ticket-codes.png" width="150";/>
            <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
        </fieldset>
    </form>
</div>

<!--------------------------------------------------------------------------------------------------------------------------------------------------------Working on this code-->


<h1>My Tickets</h1>

<div>
    <p>Belowe are your tickets</p>
    <button id="create-user">Add a Ticket</button>
</div>
<br/>
<?php foreach($mytickets as $ticket){
    $my_picks = Picks::model()->find_tickets_by_ID($ticket['ID']);
    $string_exploded = explode("-", $ticket['code']);
    $school_ID = $string_exploded[0];
    $school = School::model()->get_name_by_ID($school_ID);
    ?>
    <div class="regional_div ticket" id="my_picks" style="float:left; margin-left: 20px;">
        <span style="color: black;"><b>School : </b><a href="/index.php/school/<?php echo $school_ID; ?>"><?php echo $school;?></a></span><br/>
        <span style="color: black;"><b>Ticket # : </b><?php echo $ticket['code']; ?></span>
        <?php echo $this->renderPartial('container/my_picks_div', array('picks' => $my_picks,'ticket_ID' => $ticket['ID']));?>
        <a style="text-align: center" href="/index.php/ticket/update/<?php echo $ticket['ID'];?>">Edit Ticket</a>
    </div>
<?php }?>
<div class="clear"></div>
<div id="accordion">
<?php
    $mytickets = Ticket::model()->get_tickets_by_user_ID();
    foreach($mytickets as $ticket){?>
        <h3><b>Ticket : </b><?php echo $ticket['code']; ?></h3>
        <div style="background: #e6e6e6; color: #555555;">
            <?php echo $this->renderPartial('container/score_table', array('ticket' => $ticket)); ?>
        </div>
    <?php } ?>
</div>

