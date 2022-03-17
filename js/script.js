function actionToggle() {
    const action = document.querySelector('.action');
    action.classList.toggle('active')
  }
  
 $(document).ready(function(){
    $('#birth-date').mask('00/00/0000');
    $('#phone-number').mask('0000-0000');
   })
