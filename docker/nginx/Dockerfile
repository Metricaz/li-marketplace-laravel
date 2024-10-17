FROM node:18-alpine as build-stage

WORKDIR /app/

COPY ./package.json ./package-lock.json /app/

RUN npm install

COPY ./ ./

RUN npm run build

FROM nginx:1.17-alpine

WORKDIR /var/www/

COPY ./docker/nginx/default.conf /etc/nginx/conf.d/default.conf

COPY ./ ./

COPY --from=build-stage /app/public /var/www/public

EXPOSE 80
