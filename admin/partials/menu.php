<?php
    include ('db_connect.php');
?>
<html>
 <head>
   <title> </title>
<style>
  table.registration div {
    color: #ffffff;
    font-size : 15px;
}
</style>
</head>
 <body>
<table class="registration" width="100%"  align=center bgcolor="#324259"> 
  <tr  align="center"> 

    <td height= "30" width = "12%">
       <a href="index.php?link=home" style= 'text-decoration:none'>
         <div> Home </div>
       </a>
    </td>
    <td  width = "12%">
          <a href="index.php?link=add_new_juices" style= 'text-decoration:none'>
         <div>Add New Juices</Div>
       </a>
    </td>
    
        
    <td  width = "12%">
       <a href="index.php?link=giftcards" style= 'text-decoration:none'>
         <div>Add Gift Cards</Div>
       </a>
    </td>
    <td  width = "12%">
          <a href="index.php?link=debitcards" style= 'text-decoration:none'>
         <div>Add New Debit Card</Div>
       </a>
    </td>
	
	<td  width = "12%">
          <a href="index.php?link=creditcards" style= 'text-decoration:none'>
         <div>Add New Credit Cards </Div>
       </a>
    </td>
	<td  width = "12%">
          <a href="index.php?link=third_party_payments" style= 'text-decoration:none'>
         <div>Add New Third Party Payments </Div>
       </a>
    </td>
   <td  width = "12%">
          <a href="index.php?link=add_new_lifestyle" style= 'text-decoration:none'>
         <div>Add New Life Styles</div>
       </a>
    </td>


  </tr>
 </table>
</body>
</html>