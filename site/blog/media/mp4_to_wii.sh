ffmpeg -i $1.mp4 -q:v 5 -ar 44100 -vf scale=640:360 $1.flv
