  <!-- Custom Scripts -->
  <script type="text/javascript" src="../../js/main.js"></script>
  <script type="text/javascript" src="../../js/createAccountReq.js"></script>
  <script type="text/javascript" src="../../js/loginReq.js"></script>
  <script type="text/javascript" src="../../js/addItemReq.js"></script>
  <script type="text/javascript" src="../../js/utils.js"></script>
  <script type="text/javascript" src="../../js/toggleItemStatus.js"></script>
  <script type="text/javascript" src="../../js/uiActions.js"></script>
  <script type="text/javascript" src="../../js/logout.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
  $('.modal').modal();

  $(".button-collapse").sideNav({
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true
    });
});
</script>
