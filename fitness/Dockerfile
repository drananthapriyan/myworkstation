FROM node

RUN mkdir -p /usr/src/app

COPY . /usr/src/app

WORKDIR /usr/src/app

ENV PATH /usr/src/app/node_modules/.bin:$PATH

CMD ["npm", "start"]
