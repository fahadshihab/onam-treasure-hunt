<?php
session_start();
                $servername = "localhost";
                $username = "maveli";
                $password = "maveli";
                $dbname = "ONAMHUNT";
                $problem_register = array(
                    "problem1",
                    "problem2",
                    "problem3",
                    "problem4",
                    "problem5",
                    "problem6",
                    "problem7"
                );
                $conn = new mysqli($servername, $username, $password, $dbname);
                if (!$conn) {
                    echo "failed";
                }
                $sql = 'SELECT * FROM scoreboard WHERE team_code = "' . $_SESSION["team_code"] . '"';
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    for($i = 0; $i < 7; $i++){
                        echo readfile("../onam/" . $problem_register[$i] . ".txt");
                        if(empty($row[$problem_register[$i]])){
                            break;
                        }
                    }
                }else{
                    echo "<span>onnum kitteela</span>";
                }
                mysqli_close();
                ?>