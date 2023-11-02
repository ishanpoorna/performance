<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Performance</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
</head>


<body>
    <section id="menu"> 
        <div class="logo">
            <img src="../images/Logo-act.png" alt="">
            <!-- <h2>ATHLETE' 360</h2> -->
        </div>

        <div class="items">
            <li><i class="coach-dashboard"></i><a href="../Dashboard/dash.html">Dashboard</a></li>
            <li><i class="coach-stat"></i><a href="">Palyer Stats</a></li>
            <li><i class="coach-attendance"></i><a href="">Attendance</a></li>
            <li><i class="coach-payments"></i><a href="../Earnings/payments.html">Earnings</a></li>
            
            <li><i class="coach-time"></i><a href="">Time Allocations</a></li>
        </div>
    </section>

    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div class="search">
                    <i class="fa fa-search"></i>
                    <input type="text" placeholder="Search">
                </div>
            </div>
            <div class="profile">
                <i class="fa fa-bell"></i>
                <img src="../images/1.jpg" alt="">
            </div>
        </div>

        
        <h3 class="i-name">Statistics</h3>
<div class="forms">
<form action="?c=contact" method="post" >
        <div class="line">
            <label for="playerID">Player ID</label>
            <input type="text" name="id" id="id" value="<?php echo (isset($_POST['id'])) ? $_POST['id'] : '' ?>">
       
            <label for="playerName">Player Name</label>
            <input type="text" name="pname" id="pname" value="<?php echo (isset($_POST['pname'])) ? $_POST['pname'] : '' ?> ">
       
            <label for="playerAge">Address</label>
            <input type="text" name="address" id="address" value="<?php echo (isset($_POST['address'])) ? $_POST['address'] : '' ?>">


            
           </div>
           <label for="date">Date</label>
           <input type="text" name="date" id="date" value="<?php echo (isset($_POST['date'])) ? $_POST['date'] : '' ?>">

<br>

           <div class="line">
            <label for="Batting">Batting</label>
            <div class="slidecontainer">
            <input type="range" min="0" max="10" value="<?php echo (isset($_POST['batting'])) ? $_POST['batting'] : '' ?><?php echo $contact['batting']; ?>" class="slider" id="batting" name="batting">
          </div>
           </div>
<br>
          <div class="line">
            <label for="Bowling">Bowling</label>
            <div class="slidecontainer">
            <input type="range" min="0" max="10" value="<?php echo (isset($_POST['bowling'])) ? $_POST['bowling'] : '' ?>" class="slider" id="bowling" name="bowling">
          </div>
    </div>
    <br>
          <div class="line">
            <label for="fielding">fielding</label>
            <div class="slidecontainer">
            <input type="range" min="0" max="10" value="<?php echo (isset($_POST['fielding'])) ? $_POST['fielding'] : '' ?>" class="slider" id="fielding" name="fielding">
          </div>
    </div>
    <br>
          <div class="line">
            <label for="fitness">fitness</label>
            <div class="slidecontainer">
            <input type="range" min="0" max="10" value="<?php echo (isset($_POST['fitness'])) ? $_POST['fitness'] : '' ?>" class="slider" id="fitness" name="fitness">
          </div>
    </div>

    <button  type="submit" name="search" value="search"> Search </button>
    <button  type="submit" name="save" value="save"> Save </button>
    <button  type="submit" name="update" value="update"> Update </button>
    <button  type="submit" name="delete" value="delete"> Delete </button>
    </form>
    <?php 

if(isset($_POST['save'])) { 
    require_once 'model/Contact.php';
        $c_name="Contact";
        $method="add";
            $c_object = new $c_name();
            $c_object->$method($_POST);
            $message="Successfuly Saved";
            echo "<script>alert('$message');</script>";
        
} 

if(isset($_POST['search'])) { 
    require_once 'model/Contact.php';
        $c_name="Contact";
        $method="search";
            $c_object = new $c_name();
            $contact[]=$c_object->$method($_POST);
            $message=$_GET['pname'];
            
            echo "<script>alert('$message');</script>";
        
} 
if(isset($_POST['update'])) { 
    require_once 'model/Contact.php';
        $c_name="Contact";
        $method="edit";
            $c_object = new $c_name();
            $c_object->$method($_POST);
            $message=$_POST['id'];
            echo "<script>alert('$message');</script>";
        
} 
if(isset($_POST['delete'])) { 
    require_once 'model/Contact.php';
        $c_name="Contact";
        $method="delete";
            $c_object = new $c_name();
            $c_object->$method($_POST['id']);
            $message="Successfuly Deleted";
            echo "<script>alert('$message');</script>";
        
} 
    
    
   
        
    if ($errors) {
			?>
			<h3>Error:</h3>
			<ul>
				<?php foreach ($errors as $value) { ?>
					<li><?php echo $value; ?></li>
				<?php } ?>
			</ul>
	<?php } ?>
    

</div>


        <table class="graph">
            <thead>
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Percentage</th>
                </tr>
            </thead>
            <tbody>
                <tr style="height:85%">
                    <th scope="row">Runs</th>
                    <td><span>85</span></td>
                </tr>
                <tr style="height:23%">
                    <th scope="row">Wickets</th>
                    <td><span>23</span></td>
                </tr>
                <tr style="height:7%">
                    <th scope="row">Catches</th>
                    <td><span>7</span></td>
                </tr>
                <tr style="height:38%">
                    <th scope="row">Run Outs</th>
                    <td><span>38</span></td>
                </tr>
                <tr style="height:7%">
                    <th scope="row">Stumpings</th>
                    <td><span>0</span></td>
                </tr>
                <tr style="height:35%">
                    <th scope="row">Batting Average</th>
                    <td><span>35</span></td>
                </tr>
                <tr style="height:35%">
                    <th scope="row">Batting Strike Rate</th>
                    <td><span>35</span></td>
                </tr>
                <tr style="height:30%">
                    <th scope="row">Bowling Average</th>
                    <td><span>30</span></td>
                </tr>
                <tr style="height:8%">
                    <th scope="row">Economy</th>
                    <td><span>5</span></td>
                </tr>
                <tr style="height:20%">
                    <th scope="row">Bowling Strike Rate</th>
                    <td><span>20</span></td>
                </tr>
            </tbody>
        </table>

        <div class="performance">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Match</td>
                        <td>Date</td>
                        <td>Runs</td>
                        <td>Wickets</td>
                        <td>Catches</td>
                        <td>Run Outs</td>
                        <td></td>
                        <td></td>
                </thead>
                <tbody>
                    <tr>
                        <td><h5>Serandib CC vs. Gampaha CC</h5></td>
                        <td><p>2023/06/15</p></td>
                        <td><p>104</p></td>
                        <td><p>03</p></td>
                        <td><p>01</p></td>
                        <td><p>01</p></td>
                        <td class="edit"><a href="#">Edit</a></td>
                        <td class="delete"><a href="#">Delete</a></td>
                </tbody>
                <tbody>
                    <tr>
                        <td><h5>Serandib CC vs. SCC</h5></td>
                        <td><p>2023/05/09</p></td>
                        <td><p>23</p></td>
                        <td><p>05</p></td>
                        <td><p>01</p></td>
                        <td><p>02</p></td>
                        <td class="edit"><a href="#">Edit</a></td>
                        <td class="delete"><a href="#">Delete</a></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td><h5>Serandib CC vs. NCC</h5></td>
                        <td><p>2023/03/21</p></td>
                        <td><p>41</p></td>
                        <td><p>-</p></td>
                        <td><p>03</p></td>
                        <td><p>-</p></td>
                        <td class="edit"><a href="#">Edit</a></td>
                        <td class="delete"><a href="#">Delete</a></td>
                </tbody>
            </table>
        </div>


        <h3 class="i-name">Skill Evaluation</h3>

        <div class="performance">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Date</td>
                        <td>Batting</td>
                        <td>Bowling</td>
                        <td>Fielding</td>
                        <td>Fitness</td>
                </thead>
                <tbody>
                    <tr>
                        <td><h5>2023/06/15</h5></td>
                        <td><h5>6/10</h5><p>Head should be still when playing the cover drive</p></td>
                        <td><h5>8/10</h5><p>Should practice more to bowl the outswinger</p></td>
                        <td><h5>5/10</h5><p>Should keep the eye on the ball when catching the ball</p></td>
                        <td><h5>-</h5><p>-</p></td>
                </tbody>
                <tbody>
                    <tr>
                        <td><p>2023/05/09</p></td>
                        <td><h5>-</h5><p>-</p></td>
                        <td><h5>8/10</h5><p>Should practice more to bowl the outswinger</p></td>
                        <td><h5>5/10</h5><p>Fitness level should be imporved</p></td>
                        <td><h5>6/10</h5><p>Head should be still when playing the cover drive</p></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td><p>2023/03/21</p></td>
                        <td><h5>6/10</h5><p>Head should be still when playing the cover drive</p></td>
                        <td><h5>8/10</h5><p>Should practice more to bowl the outswinger</p></td>
                        <td><h5>5/10</h5><p>Fitness level should be imporved</p></td>
                        <td><h5>6/10</h5><p>Head should be still when playing the cover drive</p></td>
                </tbody>
            </table>
        </div>

        <h3 class="i-name">Additional Notes</h3>
        
        <div class="notes">
            <h4>Fitness Level</h4>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
        </div>

    </section>
    
</body>
</html>
