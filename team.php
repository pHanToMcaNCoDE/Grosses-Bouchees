<?php 

require('nav.php');

?>


<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
:root{
  --font: 'Parisienne';
  --op: 'Open Sans';
  --ds: 'Dancing Script';
  --rg: 'Rajdhani';
  --m: 'Nanum Myeongjo';

  

   /* For all Paragraphs */
   --av: 'Avenir';
  
  /* Colors */
  --whisky: #d4a37a;
  --lg: #e5e5e5;
  --dg: #474747;
  --lp: #e5e5;
  --ash: #4747;
  --drG: #474;
  --ck: #000;
  --w: #fff;
  --cr: crimson;
  --pb: #e6ddd6;
  --cham: #fbe3d7;
  --sel: #eff3fc;
}
html{
  scroll-behavior: smooth;
}
body{
  overflow-x: hidden;
  text-decoration: none;
}
.max-width{
  max-width: 1330px;
  min-width: 500px;
  padding: 0 80px;
  margin: auto;
}
span{
  font-size: 28px;
  color: var(--whisky);
}
.team-gen .team-gc .right, .team1 .team1-c .left, .team2 .team2-c .right, .team3 .team3-c .left, .team4 .team4-c .right,
.team5 .team5-c .left, .team6 .team6-c .right, .team7 .team7-c .left, .team8 .team8-c .right {
  background: var(--pb);
}



/********************************************************* 
# Team Styling 
*********************************************************/

.team-gen{
  height: 100vh;
  animation-name: bck;
  animation-duration: 1s;
  animation-delay: 2.5s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
.team-gen .max-width{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.team-gen .team-gc{
  display: flex;
} 
.team-gen .team-gc .left{
  width: 50%;
  flex: 33.3%;
  position: absolute;
  left: 0;
}
.team-gen .team-gc .left img{
  width: 100%;
  height: 105vh;
}
.team-gen .team-gc .right{
  width: 50%;
  flex: 33.3%;
  position: absolute;
  right: 0;
  height: 105vh;
  padding: 45px;
}
.team-gen .team-gc .right h4{
  font-size: 40px;
  font-family: var(--font), serif;
  color: #474747;
  margin-left: 10px;
  font-weight: 500;
  padding-top: 30%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 7.2s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
  transition: all .5s ease;
}
.team-gen .team-gc .right .line{
  content: '';
  display: block;
  background: #e5e5;
  margin-left: 25%;
  width: 50px;
  height: 2px;
  font-family: var(--font), serif;
  margin-bottom: 30px;
  animation-name: line;
  animation-duration: 2s;
  animation-delay: 7.4s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
}
.team-gen .team-gc .right p{
  margin-left: 5%;
  text-align: justify;
  font-size: 17px;
  padding-top: 5px;
  font-family: var(--av), sans-serif;
  color: #474747;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 7.7s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: all .5s;
}


/********************************************************* 
# Team1 Styling 
*********************************************************/


.team1{
  height: 105vh;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 2.5s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: all .5s;
}
.team1 .max-width{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.team1 .team1-c{
  display: flex;
}
.team1 .team1-c .left{
  width: 50%;
  flex: 33.3%;
  height: 105vh;
  padding: 50px 60px;
  position: absolute;
  left: 0;
}
.team1 .team1-c .left h2{
  font-size: 45px;
  font-family: var(--font), serif;
  color: #474747;
  padding-top: 20px;
  font-weight: 500;
  padding-top: 10%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 6.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
  transition: all .5s ease 
}
.team1 .team1-c .left .line{
  content: '';
  display: block;
  background: #e5e5;
  margin-left: 20%;
  width: 50px;
  height: 2px;
  font-family: var(--font), serif;
  margin-bottom: 30px;
  animation-name: line;
  animation-duration: 2s;
  animation-delay: 6.8s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
}
.team1 .team1-c .left h4{
  font-size: 40px;
  font-family: var(--ds), serif;
  color: var(--whisky);
  padding-top: 20px;
  font-weight: 500;
  padding-top: 1%;
  padding-bottom: 5%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 6.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
  transition: all .5s ease;
}
.team1 .team1-c .left p{
  padding-top: 8px;
  text-align: justify;
  font-size: 18px;
  font-family: var(--av), sans-serif;
  font-weight: 400;
  color: var(--ck);
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 7s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: all .5s;
}
.team1 .team1-c .left .team1-btn{
  margin-top: 8%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 8s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: all .5s;
}
.team1 .team1-c .left .team1-btn a{
  border: 2px solid var(--whisky);
  font-size: 22px;
  font-family: var(--m), sans-serif;
  padding: 10px 12px;
  text-decoration: none;
  color: var(--whisky);
  transition: all .3s ease-in-out;
}
.team1 .team1-c .left .team1-btn a:hover{
  background: var(--whisky);
  color: var(--w);
  border: 2px solid var(--whisky);
}
.team1 .team1-c .right{
  width: 50%;
  flex: 33.3%;
  margin-left: 50%;
}
.team1 .team1-c .right img{
  width: 50%;
  height: 105vh;
  position: absolute;
  right: 0;
}


/********************************************************* 
# Team2 Styling 
*********************************************************/

.team2{
  height: 100vh;
  animation-name: bck;
  animation-duration: 1s;
  animation-delay: 2.5s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
.team2 .max-width{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.team2 .team2-c{
  display: flex;
} 
.team2 .team2-c .left{
  width: 50%;
  flex: 33.3%;
}
.team2 .team2-c .left img{
  width: 50%;
  height: 100vh;
  position: absolute;
  left: 0;
  padding: 1.5px;
}
.team2 .team2-c .right{
  width: 50%;
  flex: 33.3%;
  position: absolute;
  right: 0;
  height: 100vh;
  padding: 45px;
}
.team2 .team2-c .right h2{
  font-size: 45px;
  font-family: var(--font), serif;
  color: var(--ck);
  margin-top: -4%;
  padding-left: 22px;
  font-weight: 500;
  padding-top: 10%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 6.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
  transition: all .5s ease 
}
.team2 .team2-c .right .line{
  content: '';
  display: block;
  background: #e5e5;
  margin-left: 20%;
  width: 50px;
  height: 2px;
  font-family: var(--font), serif;
  margin-bottom: 30px;
  animation-name: line;
  animation-duration: 2s;
  animation-delay: 6.8s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
}
.team2 .team2-c .right h4{
  font-size: 40px;
  font-family: var(--ds), serif;
  color: var(--whisky);
  padding-left: 25px;
  font-weight: 500;
  padding-top: 1%;
  padding-bottom: 5%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 6.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
  transition: all .5s ease;
}
.team2 .team2-c .right p{
  margin-left: 5%;
  text-align: justify;
  font-size: 18px;
  font-family: var(--av), sans-serif;
  font-weight: 400;
  color: var(--ck);
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 7.7s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: all .5s;
}
.team2 .team2-c .right .t2-p1{
  padding-top: 15px;
}


/********************************************************* 
# Team3 Styling 
*********************************************************/

.team3{
  height: 105vh;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 2.5s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: all .5s;
}
.team3 .max-width{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.team3 .team3-c{
  display: flex;
}
.team3 .team3-c .left{
  width: 50%;
  flex: 33.3%;
  position: absolute;
  left: 0;
  height: 105vh;
  padding: 50px 60px;
}
.team3 .team3-c .left h2{
  font-size: 45px;
  font-family: var(--font), serif;
  color: #474747;
  margin-top: -4%;
  font-weight: 500;
  padding-top: 10%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 6.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
  transition: all .5s ease 
}
.team3 .team3-c .left .line{
  content: '';
  display: block;
  background: #e5e5;
  margin-left: 20%;
  width: 50px;
  height: 2px;
  font-family: var(--font), serif;
  margin-bottom: 30px;
  animation-name: line;
  animation-duration: 2s;
  animation-delay: 6.8s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
}
.team3 .team3-c .left h4{
  font-size: 40px;
  font-family: var(--ds), serif;
  color: var(--whisky);
  padding-top: 20px;
  font-weight: 500;
  padding-top: 1%;
  padding-bottom: 5%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 6.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
  transition: all .5s ease;
}
.team3 .team3-c .left p{
  text-align: justify;
  font-size: 18px;
  font-family: var(--av), sans-serif;
  font-weight: 400;
  color: var(--ck);
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 7s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: all .5s;
}
.team3 .team3-c .left .t3-p1{
  padding-top: 15px;
}
.team3 .team3-c .right{
  width: 50%;
  flex: 33.3%;
  margin-left: 50%;
}
.team3 .team3-c .right img{
  width: 50%;
  height: 105vh;
  position: absolute;
  right: 0;
  padding: 1.5px;
}


/********************************************************* 
# Team4 Styling 
*********************************************************/

.team4{
  height: 100vh;
  animation-name: bck;
  animation-duration: 1s;
  animation-delay: 2.5s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
.team4 .max-width{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.team4 .team4-c{
  display: flex;
} 
.team4 .team4-c .left{
  width: 50%;
  flex: 33.3%;
  position: absolute;
  left: 0;
}
.team4 .team4-c .left img{
  width: 100%;
  padding: 1.5px;
  height: 100vh;
  position: absolute;
  left: 0;
}
.team4 .team4-c .right{
  width: 50%;
  flex: 33.3%;
  position: absolute;
  right: 0;
  height: 100vh;
  padding: 45px;
}
.team4 .team4-c .right h2{
  font-size: 45px;
  font-family: var(--font), serif;
  color: #474747;
  padding-top: 20px;
  padding-left: 22px;
  font-weight: 500;
  padding-top: 10%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 6.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
  transition: all .5s ease 
}
.team4 .team4-c .right .line{
  content: '';
  display: block;
  background: #e5e5;
  margin-left: 20%;
  width: 50px;
  height: 2px;
  font-family: var(--font), serif;
  margin-bottom: 30px;
  animation-name: line;
  animation-duration: 2s;
  animation-delay: 6.8s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
}
.team4 .team4-c .right h4{
  font-size: 40px;
  font-family: var(--ds), serif;
  color: var(--whisky);
  padding-left: 25px;
  font-weight: 500;
  padding-top: 1%;
  padding-bottom: 5%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 6.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
  transition: all .5s ease;
}
.team4 .team4-c .right p{
  margin-left: 5%;
  text-align: justify;
  font-size: 18px;
  font-family: var(--av), sans-serif;
  font-weight: 400;
  color: var(--ck);
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 7.7s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: all .5s;
}


/********************************************************* 
# Team5 Styling 
*********************************************************/

.team5{
  height: 105vh;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 2.5s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: all .5s;
}
.team5 .max-width{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.team5 .team5-c{
  display: flex;
}
.team5 .team5-c .left{
  width: 50%;
  flex: 33.3%;
  position: absolute;
  left: 0;
  height: 105vh;
  padding: 50px 60px;
}
.team5 .team5-c .left h2{
  font-size: 45px;
  font-family: var(--font), serif;
  color: #474747;
  padding-top: 20px;
  font-weight: 500;
  padding-top: 10%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 6.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
  transition: all .5s ease 
}
.team5 .team5-c .left .line{
  content: '';
  display: block;
  background: #e5e5;
  margin-left: 20%;
  width: 50px;
  height: 2px;
  font-family: var(--font), serif;
  margin-bottom: 30px;
  animation-name: line;
  animation-duration: 2s;
  animation-delay: 6.8s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
}
.team5 .team5-c .left h4{
  font-size: 40px;
  font-family: var(--ds), serif;
  color: var(--whisky);
  padding-top: 20px;
  font-weight: 500;
  padding-top: 1%;
  padding-bottom: 5%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 6.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
  transition: all .5s ease;
}
.team5 .team5-c .left p{
  text-align: justify;
  font-size: 18px;
  font-family: var(--av), sans-serif;
  font-weight: 400;
  color: var(--ck);
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 7s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: all .5s;
}
.team5 .team5-c .right{
  width: 50%;
  flex: 33.3%;
  margin-left: 50%;
}
.team5 .team5-c .right img{
  width: 50%;
  height: 105vh;
  position: absolute;
  right: 0;
  padding: 1.5px;
}


/********************************************************* 
# Team6 Styling 
*********************************************************/

.team6{
  height: 100vh;
  animation-name: bck;
  animation-duration: 1s;
  animation-delay: 2.5s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
.team6 .max-width{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.team6 .team6-c{
  display: flex;
} 
.team6 .team6-c .left{
  width: 50%;
  flex: 33.3%;
  position: absolute;
  left: 0;
}
.team6 .team6-c .left img{
  width: 100%;
  height: 105vh;
  padding: 1.5px;
}
.team6 .team6-c .right{
  width: 50%;
  flex: 33.3%;
  position: absolute;
  right: 0;
  height: 105vh;
  padding: 45px;
}
.team6 .team6-c .right h2{
  font-size: 45px;
  font-family: var(--font), serif;
  color: #474747;
  padding-top: 20px;
  padding-left: 22px;
  font-weight: 500;
  padding-top: 10%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 6.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
  transition: all .5s ease 
}
.team6 .team6-c .right .line{
  content: '';
  display: block;
  background: #e5e5;
  margin-left: 20%;
  width: 50px;
  height: 2px;
  font-family: var(--font), serif;
  margin-bottom: 30px;
  animation-name: line;
  animation-duration: 2s;
  animation-delay: 6.8s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
}
.team6 .team6-c .right h4{
  font-size: 40px;
  font-family: var(--ds), serif;
  color: var(--whisky);
  padding-left: 25px;
  font-weight: 500;
  padding-top: 1%;
  padding-bottom: 5%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 6.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
  transition: all .5s ease;
}
.team6 .team6-c .right p{
  margin-left: 5%;
  text-align: justify;
  font-size: 18px;
  font-family: var(--av), sans-serif;
  font-weight: 400;
  color: #474747;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 7.7s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: all .5s;
}


/********************************************************* 
# Team7 Styling 
*********************************************************/

.team7{
  height: 105vh;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 2.5s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: all .5s;
}
.team7 .max-width{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.team7 .team7-c{
  display: flex;
}
.team7 .team7-c .left{
  width: 50%;
  flex: 33.3%;
  position: absolute;
  left: 0;
  height: 105vh;
  padding: 50px 60px;
}
.team7 .team7-c .left h2{
  font-size: 45px;
  font-family: var(--font), serif;
  color: #474747;
  padding-top: 20px;
  font-weight: 500;
  padding-top: 10%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 6.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
  transition: all .5s ease 
}
.team7 .team7-c .left .line{
  content: '';
  display: block;
  background: #e5e5;
  margin-left: 20%;
  width: 50px;
  height: 2px;
  font-family: var(--font), serif;
  margin-bottom: 30px;
  animation-name: line;
  animation-duration: 2s;
  animation-delay: 6.8s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
}
.team7 .team7-c .left h4{
  font-size: 40px;
  font-family: var(--ds), serif;
  color: var(--whisky);
  padding-top: 20px;
  font-weight: 500;
  padding-top: 1%;
  padding-bottom: 5%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 6.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
  transition: all .5s ease;
}
.team7 .team7-c .left p{
  text-align: justify;
  font-size: 18px;
  font-family: var(--av), sans-serif;
  font-weight: 400;
  color: var(--ck);
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 7s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: all .5s;
}
.team7 .team7-c .right{
  width: 50%;
  flex: 33.3%;
  margin-left: 50%;
}
.team7 .team7-c .right img{
  width: 50%;
  height: 105vh;
  position: absolute;
  right: 0;
}


/********************************************************* 
# Team8 Styling 
*********************************************************/

.team8{
  height: 100vh;
  animation-name: bck;
  animation-duration: 1s;
  animation-delay: 2.5s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
}
.team8 .max-width{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.team8 .team8-c{
  display: flex;
} 
.team8 .team8-c .left{
  width: 50%;
  flex: 33.3%;
  position: absolute;
  left: 0;
}
.team8 .team8-c .left img{
  width: 100%;
  height: 105vh;
  padding: 1.5px;
}
.team8 .team8-c .right{
  width: 50%;
  flex: 33.3%;
  position: absolute;
  right: 0;
  height: 105vh;
  padding: 45px;
}
.team8 .team8-c .right h2{
  font-size: 45px;
  font-family: var(--font), serif;
  color: #474747;
  padding-top: 20px;
  padding-left: 22px;
  font-weight: 500;
  padding-top: 10%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 6.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
  transition: all .5s ease 
}
.team8 .team8-c .right .line{
  content: '';
  display: block;
  background: #e5e5;
  margin-left: 20%;
  width: 50px;
  height: 2px;
  font-family: var(--font), serif;
  margin-bottom: 30px;
  animation-name: line;
  animation-duration: 2s;
  animation-delay: 6.8s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
}
.team8 .team8-c .right h4{
  font-size: 40px;
  font-family: var(--ds), serif;
  color: var(--whisky);
  padding-left: 25px;
  font-weight: 500;
  padding-top: 1%;
  padding-bottom: 5%;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 6.6s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: width .5s;
  transition: all .5s ease;
}
.team8 .team8-c .right p{
  margin-left: 5%;
  text-align: justify;
  font-size: 18px;
  font-family: var(--av), sans-serif;
  font-weight: 400;
  color: #474747;
  animation-name: txt;
  animation-duration: 2s;
  animation-delay: 7.7s;
  animation-fill-mode: both;
  animation-timing-function: ease-in-out;
  transition: all .5s;
}
.team8 .team8-c .left .t8-p1{
  padding-top: 15px;
}







/********************************************************* 
# Responsiveness
*********************************************************/




@media only screen and (max-width: 900px){
  .team-gen .team-gc, .team1 .team1-c, .team2 .team2-c, .team3 .team3-c, .team4 .team4-c, 
  .team5 .team5-c, .team6 .team6-c, .team7 .team7-c, .team8 .team8-c{
    display: block;
    justify-content: space-between;
    align-items: center;
  }
  .team-gen .team-gc .right .line, .team1 .team1-c .left .line, .team2 .team2-c .right .line, .team3 .team3-c .left .line, .team3 .team3-c .left .line, .team4 .team4-c .right .line,
  .team5 .team5-c .left .line, .team6 .team6-c .right .line, .team7 .team7-c .left .line, .team8 .team8-c .right .line{
    margin-left: 48%;
  }

    
    /* Team General */

  .team-gen .team-gc .right{
    width: 100%;
    flex: 100%;
    text-align: center;
  }
  .team-gen .team-gc .left img{
    display: none;
  }



  /* Team1 */

  .team1 .team1-c .left{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 20%;
  }
  .team1 .team1-c .right{
    position: absolute;
    right: 40%;
  }
  .team1 .team1-c .right img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
  }
  /* .team1 .team1-c .left .team1-btn a{
    margin-bottom: 15%;
  } */

  /* Team2 */

 
  .team2 .team2-c .right{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 25%;
  }
  .team2 .team2-c .left{
    /* margin-top: 5%; */
    position: absolute;
    left: 40%;
  }
  .team2 .team2-c .left img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
  }

  /* Team3 */

  .team3 .team3-c .left{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 25%;
  }
  .team3 .team3-c .right{
    margin-top: 5%;
    position: absolute;
    right: 40%;
  }
  .team3 .team3-c .right img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
  }

  /* Team4 */

  .team4 .team4-c .right{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 20%;
  }
  .team4 .team4-c .left{
    position: absolute;
    left: 40%;
  }
  .team4 .team4-c .left img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
    position: absolute;
    left: 35%;
  }

  /* Team5 */

  .team5 .team5-c .left{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 25%;
  }
  .team5 .team5-c .right{
    position: absolute;
    right: 40%;
  }
  .team5 .team5-c .right img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
  }

  /* Team6 */

  .team6 .team6-c .right{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 25%;
  }
  .team6 .team6-c .left{
    position: absolute;
    left: 40%;
  }
  .team6 .team6-c .left img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
  }

  /* Team7 */

  .team7 .team7-c .left{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 25%;
  }
  .team7 .team7-c .right{
    position: absolute;
    right: 40%;
  }
  .team7 .team7-c .right img{
    width: 150px;
    height: 170px;
    border-radius: 50%;
  }

  /* Team8 */

  .team8 .team8-c .right{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 20%;
  }
  .team8 .team8-c .left{
    position: absolute;
    left: 35%;
  }
  .team8 .team8-c .left img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
  }
}






@media only screen and (max-width: 800px){
  .team-gen .team-gc, .team1 .team1-c, .team2 .team2-c, .team3 .team3-c, .team4 .team4-c, 
  .team5 .team5-c, .team6 .team6-c, .team7 .team7-c, .team8 .team8-c{
    display: block;
    justify-content: space-between;
    align-items: center;
  }
  .team-gen .team-gc .right .line, .team1 .team1-c .left .line, .team2 .team2-c .right .line, .team3 .team3-c .left .line, .team3 .team3-c .left .line, .team4 .team4-c .right .line,
  .team5 .team-c .left .line, .team6 .team6-c .right .line, .team7 .team7-c .left .line, .team8 .team8-c .right .line{
    margin-left: 48%;
  }

    
    /* Team General */

  .team-gen .team-gc .right{
    width: 100%;
    flex: 100%;
    text-align: center;
  }
  .team-gen .team-gc .left img{
    display: none;
  }



  /* Team1 */

  .team1 .team1-c .left{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 25%;
  }
  .team1 .team1-c .right{
    position: absolute;
    right: 40%;
  }
  .team1 .team1-c .right img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
  }

  /* Team2 */

 
  .team2 .team2-c .right{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 25%;
  }
  .team2 .team2-c .left{
    margin-top: 5%;
    position: absolute;
    left: 40%;
  }
  .team2 .team2-c .left img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
  }

  /* Team3 */

  .team3 .team3-c .left{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 25%;
  }
  .team3 .team3-c .right{
    margin-top: 5%;
    position: absolute;
    right: 40%;
  }
  .team3 .team3-c .right img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
  }

  /* Team4 */

  .team4 .team4-c .right{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 20%;
  }
  .team4 .team4-c .left{
    position: absolute;
    left: 40%;
  }
  .team4 .team4-c .left img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
    position: absolute;
    left: 35%;
  }

  /* Team5 */

  .team5 .team5-c .left{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 25%;
  }
  .team5 .team5-c .right{
    position: absolute;
    right: 40%;
  }
  .team5 .team5-c .right img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
  }

  /* Team6 */

  .team6 .team6-c .right{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 25%;
  }
  .team6 .team6-c .left{
    position: absolute;
    left: 40%;
  }
  .team6 .team6-c .left img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
  }

  /* Team7 */

  .team7 .team7-c .left{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 25%;
  }
  .team7 .team7-c .right{
    position: absolute;
    right: 40%;
  }
  .team7 .team7-c .right img{
    width: 150px;
    height: 170px;
    border-radius: 50%;
  }

  /* Team8 */

  .team8 .team8-c .right{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 20%;
  }
  .team8 .team8-c .left{
    position: absolute;
    left: 40%;
  }
  .team8 .team8-c .left img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
  }
}








@media only screen and (max-width: 600px){
  .team-gen .team-gc, .team1 .team1-c, .team2 .team2-c, .team3 .team3-c, .team4 .team4-c, 
  .team5 .team5-c, .team6 .team6-c, .team7 .team7-c, .team8 .team8-c{
    display: block;
    justify-content: space-between;
    align-items: center;
  }
  .team-gen .team-gc .right .line, .team1 .team1-c .left .line, .team2 .team2-c .right .line, .team3 .team3-c .left .line, .team3 .team3-c .left .line, .team4 .team4-c .right .line,
  .team5 .team-c .left .line, .team6 .team6-c .right .line, .team7 .team7-c .left .line, .team8 .team8-c .right .line{
    margin-left: 48%;
  }

    
    /* Team General */

  .team-gen .team-gc .right{
    width: 100%;
    flex: 100%;
    text-align: center;
  }
  .team-gen .team-gc .left{
    position: absolute;
    right: 35%;
  }
  .team-gen .team-gc .left img{
    display: none;
  }



  /* Team1 */
  
  .team1 .team1-c .left{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 25%;
  }
  .team1 .team1-c .right{
    position: absolute;
    right: 35%;
  }
  .team1 .team1-c .right img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
  }

  /* Team2 */

  .team2 .team2-c .right{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 25%;
  }
  .team2 .team2-c .left{
    position: absolute;
    left: 35%;
  }
  .team2 .team2-c .left img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
  }

  /* Team3 */

  .team3 .team3-c .left{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 25%;
  }
  .team3 .team3-c .right{
    position: absolute;
    right: 35%;
  }
  .team3 .team3-c .right img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
  }

  /* Team4 */

  .team4 .team4-c .right{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 20%;
  }
  .team4 .team4-c .left{
    position: absolute;
    left: 35%;
  }
  .team4 .team4-c .left img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
    position: absolute;
    left: 35%;
  }

  /* Team5 */

  .team5 .team5-c .left{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 25%;
  }
  .team5 .team5-c .right{
    position: absolute;
    right: 35%;
  }
  .team5 .team5-c .right img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
  }

  /* Team6 */

  .team6 .team6-c .right{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 25%;
  }
  .team6 .team6-c .left{
    position: absolute;
    left: 35%;
  }
  .team6 .team6-c .left img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
  }

  /* Team7 */

  .team7 .team7-c .left{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 25%;
  }
  .team7 .team7-c .right{
    position: absolute;
    right: 35%;
  }
  .team7 .team7-c .right img{
    width: 150px;
    height: 170px;
    border-radius: 50%;
  }

  /* Team8 */

  .team8 .team8-c .right{
    width: 100%;
    flex: 100%;
    text-align: center;
    padding-top: 20%;
  }
  .team8 .team8-c .left{
    position: absolute;
    left: 35%;
  }
  .team8 .team8-c .left img{
    width: 150px;
    height: 160px;
    border-radius: 50%;
  }
}





/* Animation */
/* @keyframes line{
  from{
    width: 0px;
    height: 2px;
  }
  to{
    width: 50px;
    height: 2px;
  }
  
}

@keyframes bck{
  from{
    opacity: 0%;
    width: 0%;
  }
  to{
    opacity: 100%;
    width: 100%;
  }
} */

</style>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grosses Bouch??es - France</title>
</head>
<body>
    <?php include('nav2.php'); ?>
  <section id="team-gen" class="team-gen">
    <div class="max-width">
      <div class="team-gc">
      <div class="left">
        <img src="assets/team/we.jpg" alt="">
      </div>
      <div class="right">
        <h4>Rencontrer l'??quipe</h4>
        <div class="line"></div>
        <p><span>Grosses Bouch??es</span> est surtout connu comme meilleur restaurant de France, d??clar?? le 5 d??cembre 2021. Grosses Bouch??es est ??galement connu pour sa cuisine et ses douceurs. t a ??t?? fond??e par Carlton Escoffier en 2006. Grosses Bouch??es est soutenue par une ??quipe de longue date de cadres et d'employ??s passionn??s.</p>
      </div>
      </div>
    </div>
  </section>

  <section id="team1" class="team1">
    <div class="max-width">
      <div class="team1-c">
        <div class="left">
          <h2>Carlton Escoffier</h2>
          <div class="line"></div>
            <h4>Chef ex??cutif, Grosses Bouch??es</h4>
            <p><span>Carlton Escoffier</span> a commenc?? sa carri??re ?? l'??ge de 12 ans et, lorsqu'il a pris sa retraite de l'h??tel Carlton ?? l'??ge de 27 ans, il comptait 13 ans de service actif, une dur??e consid??r??e comme un record dans sa profession. </p>
            <p>Le nom d'Escoffier est devenu mondialement connu lorsqu'en 1890, on lui confie la direction des cuisines de l'h??tel Savoy nouvellement ouvert, et il cr??e la p??che Melba en l'honneur de la c??l??bre cantatrice Nellie Melba lorsqu'elle y s??journe en 1893.</p> 
            <div class="team1-btn">
              <a href="#">Continue de lire</a>
            </div>
        </div>
        <div class="right">
          <img src="assets/team/carlton.jpg" alt="">
        </div>
      </div>
    </div>
  </section>

  <section id="team2" class="team2">
    <div class="max-width">
      <div class="team2-c">
      <div class="left">
        <img src="assets/team/naomi.jpg" alt="">
      </div>
      <div class="right">
        <h2>Naomi Waters</h2>
          <div class="line"></div>
            <h4>Directeur g??n??ral, Grosses Bouch??es</h4>
            <p><span>Naomi Waters</span> est Originaire des ??tats-Unis, Califonia a obtenu en 2009 un Master en gestion h??teli??re de la prestigieuse ??cole Hotelfachschule Heidelberg. Avec un fort d??sir de voyager, elle a d??m??nag?? ?? Sydney fin 2009 et a rejoint l'??quipe de Grosses Bouch??es en 2010.</p> 
            <p class="t2-p1">Se r??v??lant rapidement ??tre un atout pour Fink, Nadine a ??t?? accueillie dans l'??quipe de direction en 2012 avant d'occuper le poste de directrice des op??rations en 2016. Avec la r??ouverture de Grosses Bouch??es en juillet 2018, Fink ??tait fi??re d'annoncer le nouveau r??le de Nadine en tant que directrice g??n??rale de le restaurant.</p> 
      </div>
      </div>
    </div>
  </section>

  <section id="team3" class="team3">
    <div class="max-width">
      <div class="team3-c">
        <div class="left">
          <h2>Samantha Verdugo</h2>
          <div class="line"></div>
            <h4>Responsable de restaurant (ailes Paris & Lyon), Grosses Bouch??es</h4>
            <p><span>Samantha Verdugo</span> fait partie int??grante du tissu Grosses Bouch??es depuis pr??s de huit ans. Pendant six de ces ann??es, Sharon a travaill?? en ??troite collaboration avec Peter Gilmore en tant que directrice du restaurant et supervisait l'??quipe de la salle.</p>

           <p class="t3-p1"> Attir??e par l'industrie h??teli??re lors de ses ??tudes ?? l'universit?? d'Ad??la??de, Sharon a ensuite pass?? plusieurs ann??es ?? voyager et ?? travailler ?? travers l'Europe et le Royaume-Uni.</p> 
        </div>
        <div class="right">
          <img src="assets/team/samantha2.jpg" alt="">
        </div>
      </div>
    </div>
  </section>

  <section id="team4" class="team4">
    <div class="max-width">
      <div class="team4-c">
      <div class="left">
        <img src="assets/team/patrisha.jpg" alt="">
      </div>
      <div class="right">
        <h2>Patrisha Kovacic</h2>
          <div class="line"></div>
            <h4>Responsable du restaurant (aile Gen??ve & Orl??ans), Grosses Bouch??es</h4>
            <p><span>Patrisha Kovacic</span>, Originaire de Croatica, Dubrovnik est membre de Grosses Bouch??es depuis 2017, lorsqu'elle a rejoint l'??quipe des vins de Bennelong, avant de d??m??nager en 2018 et de devenir directrice de restaurant en f??vrier 2022. Patrisha a remport?? de nombreux prix tout au long de sa carri??re de vin.</p> 
      </div>
      </div>
    </div>
  </section>

  <section id="team5" class="team5">
    <div class="max-width">
      <div class="team5-c">
        <div class="left">
          <h2>Pedro Pronto</h2>
          <div class="line"></div>
            <h4>Co-chef de cuisine (aile Paris), Grosses Bouch??es</h4>
            <p><span>Pedro Pronto</span> a commenc?? sa carri??re ?? l'??ge de 12 ans et, lorsqu'il a pris sa retraite de l'h??tel Carlton ?? l'??ge de 27 ans, il comptait 13 ans de service actif, une dur??e consid??r??e comme un record dans sa profession. Le nom d'Escoffier est devenu mondialement connu lorsqu'en 1890, on lui confie la direction des cuisines de l'h??tel Savoy nouvellement ouvert, et il cr??e la p??che Melba en l'honneur de la c??l??bre cantatrice Nellie Melba lorsqu'elle y s??journe en 1893.</p> 
        </div>
        <div class="right">
          <img src="assets/team/pedro.jpg" alt="">
        </div>
      </div>
    </div>
  </section>  

  <section id="team6" class="team6">
    <div class="max-width">
      <div class="team6-c">
      <div class="left">
        <img src="assets/team/lin.jpg" alt="">
      </div>
      <div class="right">
        <h2>L??n Ch??n</h2>
          <div class="line"></div>
            <h4>Co-chef de cuisine (aile Lyon), Grosses Bouch??es</h4>
            <p><span>L??n</span> s'est aventur?? en Chine et a commenc?? son voyage aux Grosses Bouch??es en tant que chef, o?? il a travaill?? pour devenir sous-chef principal en 2018. Il s'est vu offrir un poste de co-chef de cuisine en 2019 o?? il continue de diriger l'??quipe sous la direction du chef ex??cutif. La cuisine de L??n est influenc??e par son amour de la nature, ainsi que par son admiration pour l'approche de la cuisine et du monde de l'ic??ne culinaire d??c??d??e Anthony Bourdain.</p> 
      </div>
      </div>
    </div>
  </section>

  <section id="team7" class="team7">
    <div class="max-width">
      <div class="team7-c">
        <div class="left">
          <h2>Trent Beckhamp</h2>
          <div class="line"></div>
            <h4>Co-chef de cuisine (aile Gevena), Grosses Bouch??es</h4>
            <p><span>Trent</span> a rejoint la famille Grosses Bouch??es en 2015 apr??s plusieurs ann??es de formation et de travail au Royaume-Uni. Son exp??rience internationale comprend notamment un r??le en cuisine pour James Knapett ?? Kitchen Table ?? Londres, au cours duquel le restaurant obtient sa premi??re ??toile Michelin. Tim a ??galement travaill?? avec des chefs tels que Francis Atkins du Yorke Arms et Tim Hughes du Caprice Group ?? Londres.</p> 
        </div>
        <div class="right">
          <img src="assets/team/trent.jpg" alt="">
        </div>
      </div>
    </div>
  </section>  

  <section id="team8" class="team8">
    <div class="max-width">
      <div class="team8-c">
      <div class="left">
        <img src="assets/team/miyu.jpg" alt="">
      </div>
      <div class="right">
        <h2>Miyu Abe</h2>
          <div class="line"></div>
            <h4>Co-chef de cuisine (aile Orl??ans), Grosses Bouch??es</h4>
            <p><span>Miyu Abe</span> est co-chef de cuisine de l'aile Orl??ans , dirigeant l'??quipe de cuisine avec ses coll??gues chefs Pedro, L??n et Trent</p>.

            <p class="t8-p1">Miyu a rejoint Grosses Bouch??es en 2012 en tant qu'apprentie de quatri??me ann??e, o?? elle a obtenu son dipl??me ?? travers divers r??les dans la cuisine des Grosses Bouch??es. Miyu a quitt?? le Japon en 2014 pour travailler ?? l'??tranger en France, o?? ses faits saillants de carri??re comprenaient un passage aux c??t??s de son compatriote australien Brett Graham ?? The Ledbury.</p> 
      </div>
      </div>
    </div>
  </section>
  <?php include('footer.php'); ?>
</body>
</html>
















