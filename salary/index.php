<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'dbconnect.php';

  $name=$_POST['name'];
  $id=$_POST['id'];
  $pay_period=$_POST['pay_period'];
  $location=$_POST['location'];
  $department=$_POST['department'];
  $pan_no=$_POST['pan_no'];
  $doj=$_POST['doj'];
  $designation=$_POST['designation'];
  $pf_no=$_POST['pf_no'];
  $transfer_date=$_POST['transfer_date'];
  $account_no=$_POST['account_no'];
  $total_absence_day=$_POST['total_absence_day'];
  $basic =(float)$_POST['basic'];
  $hra =$_POST['hra'];
  $transport_allowance=$_POST['transport_allowance_earning'];
  //$total =$_POST['total'];
  $pf_contribution =$_POST['pf_contribution'];
 


  $amount=( (float)$basic + (float)$hra + (float)$transport_allowance ) - (float)$pf_contribution;

 //$total =$_POST['total'];
 $exemption =$_POST['exemption'];
 $agg_of_chapter_vi=$_POST['agg_of_chapter_vi'];
 $take_home_pay =$_POST['take_home_pay'];
 $conveyance_an =$_POST['conveyance_an'];
 $hra_annual_ex =$_POST['hra_annual_ex'];
 $transport_allowance_ =$_POST['transport_allowance_'];
 $gross_salary =$_POST['gross_salary'];
 $exemption_u_s_10 =$_POST['exemption_u_s_10'];
 $balance =$_POST['balance'];
 $incm_under_hd_Salary=$_POST['incm_under_hd_Salary']; 
 $gross_tot_income =$_POST['gross_tot_income'];
 $agg_of_chapter_vi_ =$_POST['agg_of_chapter_vi_'];
 $total_income =$_POST['total_income'];
  

  
  
    $sql=("INSERT INTO `users` 
    (`name`, `id`, `pay_period`, `location`, `department`, `pan_no`,
     `doj`, `designation`, `pf_no`, `transfer_date`, `account_no`, 
     `amount`, `total_absence_day`,`basic`, `hra`, `transport_allowance`, 
     `pf_contribution`,`exemption`,`agg_of_chapter_vi`,`take_home_pay`,`conveyance_an`,
     `hra_annual_ex`,`transport_allowance_`,`gross_salary`,`exemption_u_s_10`,
     `balance`,`incm_under_hd_Salary`,`gross_tot_income`,`agg_of_chapter_vi_`,`total_income`) 
     
     VALUES ('$name', '$id', '$pay_period', '$location', '$department', '$pan_no', 
     '$doj', '$designation', '$pf_no', '$transfer_date', '$account_no', '$amount', 
     '$total_absence_day','$basic', '$hra', '$transport_allowance', '$pf_contribution',
     '$exemption','$agg_of_chapter_vi','$take_home_pay','$conveyance_an','$hra_annual_ex','$transport_allowance_',
     '$gross_salary','$exemption_u_s_10','$balance','$incm_under_hd_Salary','$gross_tot_income',
     '$agg_of_chapter_vi_','$total_income')");


    $res = mysqli_query($conn, $sql) or die("Query failed!");

  // if($res)
  // {

  //   echo "success";
  // }
  // else{
  //   echo "failed";
  // }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="" method="POST">
    <div class="section logo mb-2">
      <div class="content container">
        <div class="logo-content">
           <img src="./img/logo.png" alt="">
        </div>
      </div>
    </div>
    <section class="secone">
       <div class="container">
          <div class="sec-content">
            <div class="sec-para">
                <div class="sec1">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="name" id="name" name="name" placeholder="Name" required><br>
                </div>
                <div class="sec1">
                  <label for="exampleInputEmail1">Id</label>
                  <input type="text" id="id" name="id" placeholder="Id" required><br>
                </div>
                <div class="sec1">
                  <label for="exampleInputEmail1">Pay Period</label>
                  <input type="text" id="pay_period" name="pay_period" placeholder="Pay Period" required><br>
                </div>
            </div>
             
            <div class="sec-para">
              <div class="sec1">
                  <label for="exampleInputEmail1">Location</label>
                  <input type="text" id="location" name="location" placeholder="Location" required><br>
              </div>
              <div class="sec1">
                <label for="exampleInputEmail1">Department</label>
                <input type="text" id="department" name="department" placeholder="Department" required><br>
              </div>
              <div class="sec1">
                <label for="exampleInputEmail1">Pan No</label>
                <input type="text" id="pan_no" name="pan_no" placeholder="Pan No" required><br>
              </div>
            </div>

            <div class="sec-para">
              <div class="sec1">
                  <label for="exampleInputEmail1">DOJ</label>
                  <input type="text" id="doj" name="doj" placeholder="doj" required><br>
              </div>
              <div class="sec1">
                <label for="exampleInputEmail1">Designation</label>
                <input type="text" id="designation" name="designation" placeholder="Designation" required><br>
              </div>
              <div class="sec1">
                <label for="exampleInputEmail1">PF No</label>
                <input type="text" id="pf_no" name="pf_no" placeholder="PF No" required><br>
              </div>
            </div>
          </div>
       </div>
    </section>

    <section class="sectwo marginBottom">
       <div class="container">
          <div class="sectwo-content">
             <div class="transfer">
               <label for="exampleInputEmail1">Transfer Date</label>
               <input type="text" id="transfer_date" name="transfer_date" placeholder="Transfer Date" required>
             </div>
             <div class="transfer">
               <label for="exampleInputEmail1">Account Number</label>
               <input type="text" id="account_no" name="account_no" placeholder="Account Number" required>
             </div>
             <div class="transfer">
               <label for="exampleInputEmail1">Amount</label>
               <input type="text" id="amount" name="amount" placeholder="Amount">
             </div>
             <div class="transfer">
               <label for="exampleInputEmail1">Total Absence Day</label>
               <input type="text" id="total_absence_day" name="total_absence_day" placeholder="Total Absence Day" required>
             </div>
          </div>
       </div>
    </section>

    <section class="earn-section marginBottom">
      <div class="container">
         <div class="earn-content">
             <div class="earning-section">
                <div class="earn-full">
                  <p><strong>Earnings</strong></p>
                  <div class="earn-deduct">
                      <div class="earn-one-para">
                          <p>Basic</p>
                          <input class="input-all" type="text" id="basic" name="basic" required>
                      </div>
                      <div class="earn-one-para">
                          <p>HRA</p>
                          <input class="input-all" type="text" id="hra" name="hra" required>                      </div>
                      <div class="earn-one-para">
                          <p>Transport Allowance</p>
                          <input class="input-all" type="text" id="transport_allowance_earning" name="transport_allowance_earning" required>                      </div>
                  </div>
                  <div class="total">
                    <p><strong>Total</strong></p>
                    <input class="input-all" type="text" id="total" name="total" ><br>
                  </div>
                </div>    
                
                <div class="earn-full">
                  <p><strong>Deductions</strong></p>
                  <div class="earn-deduct">
                      <div class="earn-one-para">
                          <p>PF Contribution</p>
                          <input class="input-all" type="text" id="pf_contribution" name="pf_contribution" required>                      </div>
                  </div>
                  <div class="total">
                    <p><strong>Total</strong></p>
                    <input class="input-all" type="text" id="total" name="total"><br>
                  </div>
                </div> 
             </div>
             <div class="perk-section">
                <p><strong>Perks/Other income/Exeptions/Rebates</strong></p>
                <div class="perk-content">
                   <div class="perk1">
                      <p>Exemption</p>
                      <input class="input-all" type="text" id="exemption" name="exemption" required>
                    </div>
                   <div class="perk1">
                      <p>Agg of Chapter VI</p>
                      <input class="input-all" type="text" id="agg_of_chapter_vi" name="agg_of_chapter_vi" required>
                   </div>
                </div>
             </div>
         </div>

         <div class="take-home mt-4">
            <div class="take-content">
              <p>Take Home Pay</p>
              <input class="input-all" type="text" id="take_home_pay" name="take_home_pay" required>
            </div>
         </div>
      </div>
    </section>


    <section class="summary">
       <div class="container">
        <div class="summary-section-full">
          <div class="earning-section summary-content">
            <div class="earn-full sum-full">
              <p><strong>Sec 10 Exemption</strong></p>
              <div class="earn-deduct">
                  <div class="earn-one-para">
                      <p>Conveyance An</p>
                      <input class="input-all" type="text" id="conveyance_an" name="conveyance_an" required>
                  </div>
                  <div class="earn-one-para">
                      <p>HRA Annual Ex</p>
                      <input class="input-all" type="text" id="hra_annual_ex" name="hra_annual_ex" required>
                  </div>
                  <div class="earn-one-para">
                      <p>Transport Allowance</p>
                      <input class="input-all" type="text" id="transport_allowance_" name="transport_allowance_" required>
                  </div>
              </div>
            </div>    
            
            <div class="earn-full sum-full">
              <p><strong>Form 16 summary</strong></p>
              <div class="earn-deduct">
                  <div class="earn-one-para">
                      <p>Gross Salary</p>
                      <input class="input-all" type="text" id="fname" name="gross_salary" required>
                  </div>
                  <div class="earn-one-para">
                      <p>Exemption U/S 10</p>
                      <input class="input-all" type="text" id="fname" name="exemption_u_s_10" required>
                  </div>
                  <div class="earn-one-para">
                      <p>Balance</p>
                      <input class="input-all" type="text" id="fname" name="balance" required>
                  </div>
                  <div class="earn-one-para">
                      <p>Incm under Hd Salary</p>
                      <input class="input-all" type="text" id="fname" name="incm_under_hd_Salary" required>
                  </div>
                  <div class="earn-one-para">
                      <p>Gross Tot Income</p>
                      <input class="input-all" type="text" id="fname" name="gross_tot_income" required>
                  </div>
                  <div class="earn-one-para">
                      <p>Agg of Chapter VI</p>
                      <input class="input-all" type="text" id="agg_of_chapter_vi_" name="agg_of_chapter_vi_" required>
                  </div>
                  <div class="earn-one-para">
                      <p>Total Income</p>
                      <input class="input-all" type="text" id="fname" name="total_income" required>
                  </div>
              </div>
             
            </div> 
         </div>
        </div>
        
       </div>
    </section>

    <div class="container">
       <button class="btn btn-warning">Submit</button>
    </div>



    <h1> Salary Slip</h1>
    <div class="scrollable">
        <table class="table table-hover">
           <thead>
             <tr>
               <th scope="col"><input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"></th>
               <th scope="col"> Name</th>
               <th scope="col">Id</th>
               <th scope="col">Pay Period</th>
               <th scope="col">Location</th>
               <th scope="col">Department</th>
               <th scope="col">Pan no</th>
               <th scope="col">Doj</th>
               <th scope="col">Designation</th>
               <th scope="col">Pf No</th>
               <th scope="col">Transfer date</th>
               <th scope="col">Account No </th>
               <th scope="col">Amount</th>
               <th scope="col">Total absense of day</th>
               <th scope="col">Basic</th>
               <th scope="col">Hra</th>
               <th scope="col">Transport allowance</th>
               <th scope="col">Pf contribution</th>
               <th scope="col">Exemption</th>
               <th scope="col">Agg of chapter vi</th>
               <th scope="col">Take home pay</th>
               <th scope="col">Conveyance An</th>
               <th scope="col">HRA Annual Ex</th>
               <th scope="col">Transport Allowance</th>
               <th scope="col">Gross Salary</th>
               <th scope="col">Exemption U/S 10</th>
               <th scope="col">Balance</th>
               <th scope="col">Incm under Hd Salary</th>
               <th scope="col">Gross Tot Income</th>
               <th scope="col">Agg of Chapter VI</th>
               <th scope="col">Total Income</th>
              
             </tr>
           </thead>
           <tbody>
           
             
           </tbody>
        

<?php

$selectquery = "select * from  users";
//$con = mysqli_connect("localhost","root","","users");
$query = mysqli_query($conn,$selectquery);
//$result = mysqli_query($con,$query);
$nums = mysqli_num_rows($query);
echo $nums;
// if($result){
//     while($users= mysqli_fetch_assoc($result)){

  while($res = mysqli_fetch_array($query)){

  ?>
       
        <tr>
        <td><?php  echo $res['name'];  ?></td>
        <td><?php  echo $res['id'];  ?></td>
        <td><?php  echo $res['pay_period'];  ?></td>
        <td><?php  echo $res['location'];  ?></td>
        <td><?php  echo $res['department'];  ?></td>
        <td><?php  echo $res['pan_no'];  ?></td>
        <td><?php  echo $res['designation'];  ?></td>
        <td><?php  echo $res['pf_no'];  ?></td>
        <td><?php  echo $res['transfer_date'];  ?></td>
        <td><?php  echo $res['account_no'];  ?></td>
        <td><?php  echo $res['total_absence_day'];  ?></td>
        <td><?php  echo $res['basic'];  ?></td>
        <td><?php  echo $res['hra'];  ?></td>
        <td><?php  echo $res['transport_allowance'];  ?></td>
        <td><?php  echo $res['total'];  ?></td>
        <td><?php  echo $res['pf_contribution'];  ?></td>
        <td><?php  echo $res['exemption'];  ?></td>
        <td><?php  echo $res['agg_of_chapter_vi'];  ?></td>
        <td><?php  echo $res['take_home_pay'];  ?></td>
        <td><?php  echo $res['conveyance_an'];  ?></td>
        <td><?php  echo $res['hra_annual_ex'];  ?></td>
        <td><?php  echo $res['transport_allowance_'];  ?></td>
        <td><?php  echo $res['gross_salary'];  ?></td>
        <td><?php  echo $res['exemption_u_s_10'];  ?></td>
        <td><?php  echo $res['balance'];  ?></td>
        <td><?php  echo $res['incm_under_hd_salary'];  ?></td>
        <td><?php  echo $res['gross_tot_income'];  ?></td>
        <td><?php  echo $res['agg_of_chapter_vi_'];  ?></td>
        <td><?php  echo $res['total_income'];  ?></td>

        </tr>


<?php


  }

?>

</table>  
       </div> 
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </form>
  </body>
</html>