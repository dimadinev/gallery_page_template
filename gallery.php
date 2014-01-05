<?php
/*
Template Name: Gallery Page
*/
?>

<?php get_header(); ?>
		    <div class="container-fluid">
			<div id="content" class="clearfix row-fluid">
                            
				<div id="main" class="span12 clearfix gallery-page-container" role="main">
					<div class="top-clear"></div>
                                    <script type="text/javascript">;
                                    
                                        <?php                                            
                                            $galleryName = strtolower(get_the_title());				
                                            /** Setup the directory, insert the path to the directory which holds the folders for each gallery **/
                                            if ($handle = opendir('path to directory'.$galleryName.'/')){					
    
                                                $counter = 0;
                                                            
                                                /* Loop through the directory and places file names into imageName,
                                                remove the . and .. entries */
    
                                                echo "var galleryName=\"".$galleryName."\"\n";
                                                echo "var myImages=new Array(); \n";
                                                while (false !== ($file = readdir($handle))) {
                                                    if ($file != "." && $file != "..") {
                                                        echo "myImages[".$counter."]=\"".$imageName[$counter] = $file."\";\n";
                                                                    
                                                                                    
                                                        /*$imageName[$counter] = $file;*/
                                                        $counter ++;
                                                    }
                                                }
                                                            
                                            closedir($handle);
                                            }
                                                            
                                            $imageNumber = 0;
                                                            
                                        ?>
                                        var counter=0;
                                        var SbrowseIE = navigator.appName; 
                                        if(SbrowseIE == "Microsoft Internet Explorer") SbrowseIE = true; 
                                            else SbrowseIE = false; 
                                                            
                                            function loadImage(){
                                                document.getElementById("images").setAttribute("src", 
                                                "path to gallery directory"+galleryName+"/"+myImages[counter]+"")
                                            }
                                                            
                                            window.onload=function(){
                                                loadImage()
                                                            
                                            }
                                                            
                                                            
                                            function nextImage(){
                                                if (counter < (myImages.length - 1)){
                                                    counter = counter + 1
                                                    if(SbrowseIE){
                                                        document.getElementById("images").style.filter="alpha(opacity=20)";
                                                    }
                                                    else{
                                                        document.getElementById("images").style.opacity=0.2;
                                                    }
                                                                                
                                                    document.getElementById("loader").style.visibility="visible";
                                                    document.getElementById("images").setAttribute("src",
                                                    "path to gallery directory"+galleryName+"/"+myImages[counter]+"")	
    
                                                }
                                            }
                                                            
                                            function previousImage(){
                                                if (counter > 0){
                                                    counter = counter - 1
                                                    if(SbrowseIE){
                                                        document.getElementById("images").style.filter="alpha(opacity=20)";
                                                    }
                                                    else{
                                                        document.getElementById("images").style.opacity=0.2;
                                                    }
                                                document.getElementById("loader").style.visibility="visible";
                                                document.getElementById("images").setAttribute("src",
                                                "path to gallery directory"+galleryName+"/"+myImages[counter]+"")	
                                                                    
                                                }
                                            }
                                                            
                                            function opacityReset(){
                                                if(SbrowseIE){
                                                   document.getElementById("images").style.filter="alpha(opacity=100)";
                                                }
                                                else{
                                                    document.getElementById("images").style.opacity=1.0;
                                                }
                                                document.getElementById("loader").style.visibility="hidden";
                                            }
							
                                        </script>
					
                                    <div id="imagecontainer">
					<span id="nextButton" onMouseUp="nextImage();return false;" ></span>     
                                        <span id="previousButton" onMouseUp="previousImage();return false;" ></span> 
                                        <img id="loader" src="path to loader image" />
					<img id="images" src="" onload="opacityReset()" />
				    </div>
			
				</div> <!-- end #main -->

    
			</div> <!-- end #content -->
<?php get_footer(); ?>
