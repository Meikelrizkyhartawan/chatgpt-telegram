#Deriving the latest base image
FROM python:3.10


#Labels as key value pair
LABEL Maintainer="MeikelRizkyHartawan"


# Any working directory can be chosen as per choice like '/' or '/home' etc
# i have chosen /usr/app/src
WORKDIR /usr/app/src

#to COPY the remote file at working directory in container
COPY . ./
# Now the structure looks like this '/usr/app/src/test.py'

ENV TIME_ZONE="Asia/Jakarta"

# Install library
RUN apt -y update
RUN apt install -y tzdata
RUN cp /usr/share/zoneinfo/Asia/Jakarta /etc/localtime
RUN echo "Asia/Jakarta" > /etc/timezone
RUN apt install -y pip
RUN pip install --no-cache-dir --upgrade pip && \
    pip install --no-cache-dir requests openai datetime


#CMD instruction should be used to run the software
#contained by your image, along with any arguments.

CMD [ "python", "-u", "./main.py"]
