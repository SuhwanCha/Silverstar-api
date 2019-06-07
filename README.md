# Siverstar-API

Restful API Server for Silverstar

## Table of Contents

- [Siverstar-API](#siverstar-api)
  - [Table of Contents](#table-of-contents)
- [API LIST](#api-list)
  - [Search](#search)
    - [Search destination](#search-destination)
    - [User search history](#user-search-history)

# API LIST

## Search

### Search destination

- Method: POST
- URL: /search/get
- Params

  - `Float x`: Center longitude
  - `Float y`: Center latitude
  - `String query`: Search Keyword
  - `Boolean sort`
    - if 1: order by accuracy
    - if 0: order by distance

- Sample Input

  ```text
  x: 127.06283102249932
  y: 37.514322572335935
  query: 서울시청
  sort: 1
  ```

- Sample Output

  ```json
  [
    {
      "x": "126.978656785931",
      "y": "37.5668260054857",
      "name": "서울특별시청",
      "addr": "서울 중구 세종대로 110"
    },
    {
      "x": "126.975655748641",
      "y": "37.5644395872256",
      "name": "서울특별시청 서소문청사",
      "addr": "서울 중구 덕수궁길 15"
    },
    {
      "x": "126.978742518872",
      "y": "37.5678531561768",
      "name": "서울특별시청 무교동청사",
      "addr": "서울 중구 무교로 21"
    },
    {
      "x": "126.978204092983",
      "y": "37.5665880598597",
      "name": "서울시청 시민청 태평홀",
      "addr": "서울 중구 세종대로 110"
    },
    {
      "x": "126.975646708937",
      "y": "37.5643927335562",
      "name": "서울특별시청 서소문청사 1동",
      "addr": "서울 중구 덕수궁길 15"
    },
    {
      "x": "126.974261240781",
      "y": "37.5645690349039",
      "name": "서울시청 별관후생동",
      "addr": "서울 중구 덕수궁길 15"
    },
    {
      "x": "126.974723027287",
      "y": "37.5646195904631",
      "name": "서울특별시청 서소문청사 서울시의회별관",
      "addr": "서울 중구 덕수궁길 15"
    },
    {
      "x": "126.978693000752",
      "y": "37.5668476359284",
      "name": "서울시청 본청사 주차장",
      "addr": "서울 중구 세종대로 110"
    },
    {
      "x": "126.978221551817",
      "y": "37.5688261365316",
      "name": "서울특별시청 청계청사",
      "addr": "서울 중구 청계천로 8"
    },
    {
      "x": "126.974809133312",
      "y": "37.564370933905",
      "name": "서울특별시청 서울시청별관2동",
      "addr": "서울 중구 덕수궁길 15"
    },
    {
      "x": "126.973174653239",
      "y": "37.5645435651232",
      "name": "서울중앙지방법원 중부등기소",
      "addr": "서울 중구 서소문로11길 34"
    },
    {
      "x": "126.975175855106",
      "y": "37.5643818235373",
      "name": "서울시청 서소문별관 주차장",
      "addr": "서울 중구 덕수궁길 15"
    },
    {
      "x": "126.992218180468",
      "y": "37.5556336945332",
      "name": "서울특별시청 남산청사",
      "addr": "서울 중구 삼일대로 231"
    },
    {
      "x": "126.977199342956",
      "y": "37.5653444955867",
      "name": "시청역 1호선",
      "addr": ""
    },
    {
      "x": "126.973790543874",
      "y": "37.5641076212639",
      "name": "서울시립미술관 서소문본관",
      "addr": "서울 중구 덕수궁길 61"
    }
  ]
  ```

### User search history

- method: GET
- URL: /search/history/get/`uid`

> TODO
