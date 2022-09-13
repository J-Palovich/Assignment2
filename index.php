<?php
                $ASE230 = [
                        ['name'=>'James Palovich' ,
                        'dreamProfession'=>'Cyber Security SOC Analyst' , 
                        'dreamCompany'=>'U.S. Bank' ,
                        'shortIntro' => 'Hey Everyone! I am James Palovich, I am a cybersecurity major with a junior standing. I am quite undesided on my plans once I graduate. I am open to work within the government in a cyber-related field, however, on the civilian side I am wanting to work as a SOC analyst because of its flexibility to work on-site or remote. Either way I do plan on pursuing a master in cybersecurity upon graduation. Outside of school I am a real estate agent and photographer working with Keller Williams. I have been in real estate for about a year and a half, I got into real estate because of my interest in real estate investing.' , 
                        'funFact' => 'A fun fact about me is that I also serve in the Kentucky Army National Guard as a 17E (Electronic Warfare Specialist) with the plans of pursuing chief warrant officer in Cyber Warfare.' , 
		                'picture' => 'https://bootdey.com/img/Content/avatar/avatar2.png', 
                        'year' => 'junior' , 
                        'linkedin' => 'https://linkedin.com/in/jamespalovich/'],
               
                        ['name'=>'Chandler Farmer' , 
                        'dreamProfession'=>'Cyber Risk & Compliance Manager' , 
                        'dreamCompany'=>'Microsoft' , 
                        'shortIntro' => 'My name is Chandler Farmer and Im a senior at Northern Kentucky University studying Cybersecurity. Im an Information Technology Risk and Compliance Intern at American Modern Insurance Group. During my free time I enjoy working out, spending time with friends and watching movies' , 
                        'funFact' => 'This summer I traveled to Gatlinburg Tennessee & Norris Lake (Tennessee). Over winter break Im traveling to Florida. Lastly, during spring break Im taking a cruise to the Bahamas.' , 
		                'picture' => 'https://bootdey.com/img/Content/avatar/avatar6.png' ,
                        'year' => 'senior' , 
                        'linkedin' => 'https://linkedin.com/in/chandlerfarmer/'],
               
                        ['name'=>'Daniel Santana' , 
                        'dreamProfession'=>'Cyber Securit Analyst' , 
                        'dreamCompany'=>'Google' , 
                        'shortIntro' => 'I am a senior and a current cybersecurity major. I am originally from New York and came here for college as it was cheap and allowed me to see my brother who lives out here. I am in a fraternity and have enjoyed my time here while makinh some great friends and connections' , 
                        'funFact' => 'I am a big baseball fan, my favorite team is the New York Mets and you can always find a pendent of their team logo on my necklace.' , 
		                'picture' => 'https://bootdey.com/img/Content/avatar/avatar4.png' , 
                        'year' => 'senior' ,
                        'linkedin' => 'https://linkedin.com/in/santanaadaniel/'],
                
                        ['name'=>'Kaleb Alstott' , 
                        'dreamProfession'=>'Chief Information Security Officer - CISO' , 
                        'dreamCompany'=>'Chainalysis' , 
                        'shortIntro' => 'Hello everyone, my name is Kaleb Alstott. I am currently finishing out my junior year,starting my senior year at NKU. I am a double major in Cybersecurity and Communications. My dream goal is to work for a top tier Cybersecurity company taking place in New York. A little bit more about me is that I am currently working at Taste Of Belgium as a server in Crestview and absolutely love it! If you ever want to stop in for the best waffles and chicken in town, please let me know!' ,
                        'funFact' => 'A fun fact about me is that I am a huge Chicago Cubs baseball fan. It is my goal every year to head to Chicago and be able to watch a game at Wrigley Field. This year I am lucky enough to have my girlfriend buy me tickets and have a weekend trip this upcoming October for the end of the baseball season. I am so excited and looking forward to this everyday!' , 
		                'picture' => 'https://bootdey.com/img/Content/avatar/avatar5.png' , 
                        'year' => 'junior' , 
                        'linkedin' => 'https://linkedin.com/in/kaleb-alstott-126526221/'],
                
                ];

                
        ?>

<!doctype html>
<html lang="en">
    <head>
<!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/index.css" />
        <title><?php echo 'ASE 230 - class of Fall 2022' ?></title>
    </head>

    <body>

        <div class="container text-center">
        <h1><?php echo 'This is ASE 230 - class of Fall 2022' ; ?></h1>
        </div>
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-lg-6">
<!-- Section Heading-->
        <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
        <h3><?php echo 'Our Creative';?> <span> <?php echo 'Team';?></span></h3>
        <div class="line"></div>
        </div>
        </div>
        </div>
        <div class="row">
<!-- Single Advisor-->
<?php
    $i = 0;
    foreach($ASE230 as $member){?>


        <div class="col-12 col-sm-6 col-lg-3">
        <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
<!-- Team Thumb-->
        <div class="advisor_thumb"> 

        <?php $pic = $member['picture'];
        if($member['year'] == 'junior'){
            echo "<span class=\"badge badge-pill badge-dark\">3</span>";
        }
        else{
            echo "<span class=\"badge badge-pill badge-dark\">4</span>";
        }

        echo "<a href=\"detail.php?id=".$i."\"> <img src=\"$pic\" height=\"300\" width=\"300\" alt=\"\"></a>";?>


<!-- Social Info-->
        <div class="social-info">
            <?php $linkedin = $member['linkedin'];
            echo"<a href=\"$linkedin\"><i class=\"fa fa-linkedin\"></i></a>";?>
        </div>

        <div class="single_advisor_details_info">

        <h6>
            <?php echo $member['name']; ?>
        </h6>

        <p class="designation">
            <?php echo $member['dreamProfession']; ?>
        </p>
        </div>
        </div>
        </div>

        <?php

        $i++;
    }
    ?>

<!-- Single Advisor: END FIRST CARD SECTION-->

        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>