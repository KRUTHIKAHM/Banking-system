<!DOCTYPE html>
<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
.view, .transact, .transfer {
  border: 2px solid blue;
  border-radius: 30px;
  color: purple;
  padding: 14px 28px;
  font-size: 23px;
  cursor: pointer;
  background-color: rgb(200, 250, 100);
}

body{
  text-align: center;
}

p{
  font-size: 40px;
  font-family: garamond;
  color:  rgb(0, 100, 0);
}

</style>

<body>
  <?php include ("topheader.php"); ?>
  <b>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

    <p>Secure Transactions. Anytime,</p>
    <p>Anywhere</p>

    <br/>
    <a href='transfer.php'>
        <button class="transfer">
           Transfer Money  
        </button>
    </a>

    <br/>
    <br/>
    <a href='view_customers.php'>
        <button class="view">
            View Customers
        </button>
    </a>
    

    <br/>
    <br/>
    <a href='transactionhistory.php'>
        <button class="transact">
            Transaction History
        </button>
    </a>

    
    
  </b>
</body>
</html>