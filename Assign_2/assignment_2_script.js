
function GetTotal() {
	var e = document.getElementById("size");
	var price = e.options[e.selectedIndex].value;
	var f = document.getElementById("quantity");
	var quantity = f.options[f.selectedIndex].value;
	var subtotal=  price * quantity;
	var tax = subtotal * 0.13;
	var total = subtotal + tax;

	
	document.getElementById("tax").innerHTML = tax;
	document.getElementById("total").innerHTML = total;
}
function validate() {
	var letters = /^[A-Za-z]+$/;
	if( document.first_form.first.value == "" ) {
            alert( "Please enter a name!" );
            document.cc.first.focus();
            return false;
        }
	  if( document.first_form.Credit.value == ""|| isNaN(document.first_form.Credit.value)||document.first_form.security.value.length !=16)
            alert( "Please enter your Credit card number" );
            document.first_form.Credit.focus() ;
            return false;
         }
         if( document.first_form.exm.value == "") {
            alert( "Please enter an expiration month" );
            document.first_form.exm.focus() ;
            return false;
         }
         if( document.first_form.last.value == "" ) {
            alert( "Please provide your Last name!" );
             document.first_form.last.focus();
            return false;
         }
         if( document.first_form.security.value == ""|| isNaN(document.first_form.security.value)||document.first_form.security.value.length !=3) {
            alert( "Please provide your security code!" );
             document.first_form.security.focus();
            return false;
       	 }
       	 if( document.first_form.exy.value == "") {
            alert( "Please enter an expiration year" );
            document.first_form.exy.focus() ;
            return false;
        }
        if( document.first_form.street1.value == "") {
            alert( "Please enter an addressr" );
            document.first_form.street1.focus() ;
            return false;
        }
            if( document.first_form.city.value == "") {
            alert( "Please enter a city" );
            document.first_form.city.focus() ;
            return false;
        }
        if( document.first_form.State.value == "") {
            alert( "Please enter a province" );
            document.first_form.State.focus() ;
            return false;
        }
        if( document.first_form.post.value == "") {
            alert( "Please enter a postal code" );
            document.first_form.post.focus() ;
            return false;
        }
}
