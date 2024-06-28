FROM nginx:alpine as base

RUN echo 'config nginx';
RUN apk add --no-cache tzdata
ENV TZ=America/La_Paz

FROM base as dev
COPY docker/nginx/default.conf /etc/nginx/conf.d/
