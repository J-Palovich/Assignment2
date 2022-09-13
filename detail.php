<?php
                $ASE230 = [

                  ['name'=>'James Palovich' ,
                  'dreamProfession'=>'Cyber Security SOC Analyst' , 
                  'dreamCompany'=>'U.S. Bank' ,
                  'shortIntro' => 'Hey Everyone! I am James Palovich, I am a cybersecurity major with a junior standing. I am quite undesided on my plans once I graduate. I am open to work within the government in a cyber-related field, however, on the civilian side I am wanting to work as a SOC analyst because of its flexibility to work on-site or remote. Either way I do plan on pursuing a master in cybersecurity upon graduation. Outside of school I am a real estate agent and photographer working with Keller Williams. I have been in real estate for about a year and a half, I got into real estate because of my interest in real estate investing.' , 
                  'funFact' => 'A fun fact about me is that I also serve in the Kentucky Army National Guard as a 17E (Electronic Warfare Specialist) with the plans of pursuing chief warrant officer in Cyber Warfare.' , 
                  'picture' => 'https://bootdey.com/img/Content/avatar/avatar2.png', 
                  'year' => 'junior' , 
                  'linkedin' => 'https://linkedin.com/in/jamespalovich/' , 
                  'email' => 'palovichj1@mymail.nku.edu' ],
         
                  ['name'=>'Chandler Farmer' , 
                  'dreamProfession'=>'Cyber Risk & Compliance Manager' , 
                  'dreamCompany'=>'Microsoft' , 
                  'shortIntro' => 'My name is Chandler Farmer and Im a senior at Northern Kentucky University studying Cybersecurity. Im an Information Technology Risk and Compliance Intern at American Modern Insurance Group. During my free time I enjoy working out, spending time with friends and watching movies' , 
                  'funFact' => 'This summer I traveled to Gatlinburg Tennessee & Norris Lake (Tennessee). Over winter break Im traveling to Florida. Lastly, during spring break Im taking a cruise to the Bahamas.' , 
                  'picture' => 'https://bootdey.com/img/Content/avatar/avatar6.png' ,
                  'year' => 'senior' , 
                  'linkedin' => 'https://linkedin.com/in/chandlerfarmer/' , 
                  'email' => 'farmerc1@mymail.nku.edu' ],
         
                  ['name'=>'Daniel Santana' , 
                  'dreamProfession'=>'Cyber Securit Analyst' , 
                  'dreamCompany'=>'Google' , 
                  'shortIntro' => 'I am a senior and a current cybersecurity major. I am originally from New York and came here for college as it was cheap and allowed me to see my brother who lives out here. I am in a fraternity and have enjoyed my time here while makinh some great friends and connections' , 
                  'funFact' => 'I am a big baseball fan, my favorite team is the New York Mets and you can always find a pendent of their team logo on my necklace.' , 
                  'picture' => 'https://bootdey.com/img/Content/avatar/avatar4.png' , 
                  'year' => 'senior' ,
                  'linkedin' => 'https://linkedin.com/in/santanaadaniel/' , 
                   'email' => 'santanad1@mymail.nku.edu' ],
          
                  ['name'=>'Kaleb Alstott' , 
                  'dreamProfession'=>'Chief Information Security Officer - CISO' , 
                  'dreamCompany'=>'Chainalysis' , 
                  'shortIntro' => 'Hello everyone, my name is Kaleb Alstott. I am currently finishing out my junior year,starting my senior year at NKU. I am a double major in Cybersecurity and Communications. My dream goal is to work for a top tier Cybersecurity company taking place in New York. A little bit more about me is that I am currently working at Taste Of Belgium as a server in Crestview and absolutely love it! If you ever want to stop in for the best waffles and chicken in town, please let me know!' ,
                  'funFact' => 'A fun fact about me is that I am a huge Chicago Cubs baseball fan. It is my goal every year to head to Chicago and be able to watch a game at Wrigley Field. This year I am lucky enough to have my girlfriend buy me tickets and have a weekend trip this upcoming October for the end of the baseball season. I am so excited and looking forward to this everyday!' , 
                  'picture' => 'https://bootdey.com/img/Content/avatar/avatar5.png' , 
                  'year' => 'junior' , 
                  'linkedin' => 'https://linkedin.com/in/kaleb-alstott-126526221/' , 
                   'email' => 'alstottk1@mymail.nku.edu' ],
          
          ];

        ?>


<html lang="en">
    <head>
	<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

	</head>


	<body>
		<link rel="stylesheet" href="assets/css/detail.css" />
		<title><?php echo 'This is ASE 230 - James Palovich' ; ?></title>
		<div class="container text-center mb-5">
			<h1><?php echo 'This is ASE 230 - James Palovich' ; ?></h1>
		</div>
		<div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="mb-2">
          <img class="w-100" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
          <!--"https://bootdey.com/img/Content/avatar/avatar7.png"-->
        </div>
        <div class="mb-2 d-flex">
          <h4 class="font-weight-normal"><?php echo $ASE230[$_GET["id"]]['name']; ?></h4>
          <div class="social d-flex ml-auto">
            <p class="pr-2 font-weight-normal"><?php echo 'Follow on:';?></p>
            <a href="#" class="text-muted">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </div>
        <div class="mb-2">
          <ul class="list-unstyled">
            <li class="media">
              <span class="w-25 text-black font-weight-normal"><?php echo 'Dream profession:' ;?></span>
              <label class="media-body"><?php echo $ASE230[$_GET["id"]]['dreamProfession']; ?></label>
            <li class="media">
              <span class="w-25 text-black font-weight-normal"><?php echo 'Dream Company: ' ?> </span>
              <label class="media-body"><?php echo $ASE230[$_GET["id"]]['dreamCompany']; ?></label>
            </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal"><?php echo 'Email: ';?></span>
              <label class="media-body"><?php echo $ASE230[$_GET["id"]]['email']; ?></label>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-7 col-md-6 pl-xl-3">
        <h5 class="font-weight-normal"><?php echo 'Short intro';?></h5>
        <p><?php echo $ASE230[$_GET["id"]]['shortIntro']; ?></p>
        <div class="my-2 bg-light p-2">
            <!--I really liked this quote so I'm going to steal it ;)-->
          <p class="font-italic mb-0"><?php echo 'The price is something not necessarily defined as financial. It could be time, effort, sacrifice, money or perhaps, something else.';?></p>
        </div>
        <div class="mb-2 mt-2 pt-1">
          <h5 class="font-weight-normal"><?php echo 'Top Skills';?></h5>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:95%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title"><?php echo 'Finance';?></div>
              <span class="progress-bar-number"></span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:80%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title"><?php echo 'Information Technology';?></div>
              <span class="progress-bar-number"></span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:77%" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title"><?php echo 'Education';?></div>
              <span class="progress-bar-number"></span>
            </div>
          </div>
        </div>
        <h5 class="font-weight-normal"><?php echo 'Fun Fact';?></h5>
        <p><?php echo $ASE230[$_GET["id"]]['funFact']; ?></p>
      </div>
    </div>
  </div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </body>
</html>