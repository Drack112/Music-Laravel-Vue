FROM node:16 AS Builder

RUN apt-get update && apt-get install python curl wget -y

WORKDIR /app

RUN curl -f https://get.pnpm.io/v6.16.js | node - add --global pnpm

COPY package.json pnpm-lock.yaml .npmrc /app/
RUN pnpm install

COPY . /app

RUN pnpm run build

FROM nginx:stable-alpine

COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY --from=Builder /app/dist /usr/share/nginx/html
COPY entrypoint.sh /

ENTRYPOINT ["/entrypoint.sh"]
