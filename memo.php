<?php
// var_dumpのメモ用


// posts.showでpost.idが160の時の$postデータ

object(App\Post)#1049 (27)
  {
    ["connection":protected]=> string(5) "mysql"
    ["table":protected]=> string(5) "posts"
    ["primaryKey":protected]=> string(2) "id"
    ["keyType":protected]=> string(3) "int"
    ["incrementing"]=> bool(true)
    ["with":protected]=> array(0) { }
    ["withCount":protected]=> array(0) { }
    ["perPage":protected]=> int(15)
    ["exists"]=> bool(true)
    ["wasRecentlyCreated"]=> bool(false)
    ["attributes":protected]=> array(5) {
                                          ["id"]=> int(160)
                                          ["created_at"]=> string(19) "2021-03-04 17:42:26"
                                          ["updated_at"]=> string(19) "2021-03-04 17:42:26"
                                          ["user_id"]=> int(2)
                                          ["content"]=> string(134) "Ut voluptas non molestiae quo voluptas. Ut dolorum optio    optio et omnis. Sed cumque placeat fugiat consequuntur iure ratione nesciunt."
                                        }
    ["original":protected]=> array(5) {
                                        ["id"]=> int(160)
                                        ["created_at"]=> string(19) "2021-03-04 17:42:26"
                                        ["updated_at"]=> string(19) "2021-03-04 17:42:26"
                                        ["user_id"]=> int(2)
                                        ["content"]=> string(134) "Ut voluptas non molestiae quo voluptas. Ut dolorum optio optio et omnis. Sed cumque placeat fugiat consequuntur iure ratione nesciunt."
                                      }
    ["changes":protected]=> array(0) { }
    ["casts":protected]=> array(0) { }
    ["classCastCache":protected]=> array(0) { }
    ["dates":protected]=> array(0) { }
    ["dateFormat":protected]=> NULL
    ["appends":protected]=> array(0) { }
    ["dispatchesEvents":protected]=> array(0) { }
    ["observables":protected]=> array(0) { }
    ["relations":protected]=> array(1) {
      ["user"]=> object(App\User)
      #1262 (28)
                {
                  ["fillable":protected]=> array(3) {
                                                      [0]=> string(4) "name"
                                                      [1]=> string(5) "email" 
                                                      [2]=> string(8) "password" 
                                                    }
                  ["hidden":protected]=> array(2) {
                                                    [0]=> string(8) "password" 
                                                    [1]=> string(14) "remember_token"
                                                  }
                  ["casts":protected]=> array(1) { 
                                                    ["email_verified_at"]=> string(8) "datetime" 
                                                  }
                  ["connection":protected]=> string(5) "mysql"
                  ["table":protected]=> string(5) "users"
                  ["primaryKey":protected]=> string(2) "id"
                  ["keyType":protected]=> string(3) "int"
                  ["incrementing"]=> bool(true)
                  ["with":protected]=> array(0) { }
                  ["withCount":protected]=> array(0) { }
                  ["perPage":protected]=> int(15)
                  ["exists"]=> bool(true)
                  ["wasRecentlyCreated"]=> bool(false)
                  ["attributes":protected]=> array(8) {
                                                        ["id"]=> int(2)
                                                        ["name"]=> string(5) "Guest"
                                                        ["email"]=> string(17) "guest@example.com"
                                                        ["email_verified_at"]=> NULL
                                                        ["password"]=> string(60) "$2y$10$WnAeDzjQGzblmSN.g88ZpOkz5j8ru.4j9EkLvty2PjYh9zZvLNV/y"
                                                        ["remember_token"]=> NULL ["created_at"]=> string(19) "2020-11-18 22:56:29"
                                                        ["updated_at"]=> string(19) "0000-00-00 00:00:00"
                                                      }
                  ["original":protected]=> array(8) {
                                                      ["id"]=> int(2)
                                                      ["name"]=> string(5) "Guest"
                                                      ["email"]=> string(17) "guest@example.com"
                                                      ["email_verified_at"]=> NULL
                                                      ["password"]=> string(60) "$2y$10$WnAeDzjQGzblmSN.g88ZpOkz5j8ru.4j9EkLvty2PjYh9zZvLNV/y"
                                                      ["remember_token"]=> NULL
                                                      ["created_at"]=> string(19) "2020-11-18 22:56:29"
                                                      ["updated_at"]=> string(19) "0000-00-00 00:00:00"
                                                    }
                  ["changes":protected]=> array(0) { }
                  ["classCastCache":protected]=> array(0) { }
                  ["dates":protected]=> array(0) { }
                  ["dateFormat":protected]=> NULL
                  ["appends":protected]=> array(0) { }
                  ["dispatchesEvents":protected]=> array(0) { }
                  ["observables":protected]=> array(0) { }
                  ["relations":protected]=> array(0) { }
                  ["touches":protected]=> array(0) { }
                  ["timestamps"]=> bool(true)
                  ["visible":protected]=> array(0) { }
                  ["guarded":protected]=> array(1) {
                                                      [0]=> string(1) "*"
                                                    }
                  ["rememberTokenName":protected]=> string(14) "remember_token"
                }
    }
    ["touches":protected]=> array(0) { }
    ["timestamps"]=> bool(true)
    ["hidden":protected]=> array(0) { }
    ["visible":protected]=> array(0) { }
    ["fillable":protected]=> array(0) { }
    ["guarded":protected]=> array(1) {
                                        [0]=> string(1) "*"
                                      }
  }




object(App\User)
  #1053 (28) 
  { ["fillable":protected]=> array(3) { 
                                        [0]=> string(4) "name" 
                                        [1]=> string(5) "email" 
                                        [2]=> string(8) "password"
                                      } 
    ["hidden":protected]=> array(2) { 
                                      [0]=> string(8) "password" 
                                      [1]=> string(14) "remember_token" 
                                    } 
    ["casts":protected]=> array(1) { 
                                      ["email_verified_at"]=> string(8) "datetime" 
                                    } 
    ["connection":protected]=> string(5) "mysql" 
    ["table":protected]=> string(5) "users" 
    ["primaryKey":protected]=> string(2) "id" 
    ["keyType":protected]=> string(3) "int" 
    ["incrementing"]=> bool(true) 
    ["with":protected]=> array(0) { } 
    ["withCount":protected]=> array(0) { } 
    ["perPage":protected]=> int(15) 
    ["exists"]=> bool(true) 
    ["wasRecentlyCreated"]=> bool(false) 
    ["attributes":protected]=> array(8) { 
                                          ["id"]=> int(2) 
                                          ["name"]=> string(5) "Guest" 
                                          ["email"]=> string(17) "guest@example.com" 
                                          ["email_verified_at"]=> NULL 
                                          ["password"]=> string(60) "$2y$10$WnAeDzjQGzblmSN.g88ZpOkz5j8ru.4j9EkLvty2PjYh9zZvLNV/y" 
                                          ["remember_token"]=> NULL 
                                          ["created_at"]=> string(19) "2020-11-18 22:56:29" 
                                          ["updated_at"]=> string(19) "2021-03-01 01:05:12" 
                                        } 
    ["original":protected]=> array(8) { 
                                        ["id"]=> int(2) 
                                        ["name"]=> string(5) "Guest" 
                                        ["email"]=> string(17) "guest@example.com" 
                                        ["email_verified_at"]=> NULL 
                                        ["password"]=> string(60) "$2y$10$WnAeDzjQGzblmSN.g88ZpOkz5j8ru.4j9EkLvty2PjYh9zZvLNV/y" 
                                        ["remember_token"]=> NULL 
                                        ["created_at"]=> string(19) "2020-11-18 22:56:29" 
                                        ["updated_at"]=> string(19) "2021-03-01 01:05:12" 
                                      } 
    ["changes":protected]=> array(0) { } 
    ["classCastCache":protected]=> array(0) { } 
    ["dates":protected]=> array(0) { } 
    ["dateFormat":protected]=> NULL 
    ["appends":protected]=> array(0) { } 
    ["dispatchesEvents":protected]=> array(0) { } 
    ["observables":protected]=> array(0) { } 
    ["relations":protected]=> array(0) { } 
    ["touches":protected]=> array(0) { } 
    ["timestamps"]=> bool(true) 
    ["visible":protected]=> array(0) { } 
    ["guarded":protected]=> array(1) { 
                                        [0]=> string(1) "*" 
                                      } 
    ["rememberTokenName":protected]=> string(14) "remember_token" 
  }