{\rtf1\ansi\ansicpg1252\cocoartf2708
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fnil\fcharset0 HelveticaNeue;\f1\froman\fcharset0 Times-Roman;}
{\colortbl;\red255\green255\blue255;\red0\green0\blue0;\red179\green179\blue179;\red0\green0\blue0;
}
{\*\expandedcolortbl;;\cssrgb\c0\c0\c0\c84706;\cssrgb\c75294\c75294\c75294;\cssrgb\c0\c0\c0;
}
\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\deftab720
\pard\pardeftab720\partightenfactor0

\f0\fs22 \cf2 \cb3 \expnd0\expndtw0\kerning0
\outl0\strokewidth0 \strokec2 Submit
\f1\fs24 \cf0 \cb1 \strokec4  query($sql); if ($result->num_rows > 0) \{ //output data of each row while ($row = $result->fetch_assoc()) \{ printf ("%s, %s\
", $row["lastname"], $row["firstname"]); \} if ($result->num_rows = 0) \{ echo "0 results\
}