ffmpeg -i $1.webm -q:v 6 -ar 44100 -q:a 8 -vf scale=640:360,fps=15 $1.flv
