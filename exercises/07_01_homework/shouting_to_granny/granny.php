<?php
    printf("Granny is listening.\n");
    while(true){
        $line = trim(fgets(STDIN));
        if (strtoupper($line) == $line) {
            printf("Hey, no need to shout!\n");
            break;
        }else{
            printf("What did you say my Dear? My ears are not the same since Woodstock...\n");        
        }
    }
    
