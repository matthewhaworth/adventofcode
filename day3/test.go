// You can edit this code!
// Click here and start typing.
package main

import (
  "fmt"
  "io/ioutil"
  "strings"
)

func check(e error) {
    if e != nil {
        panic(e)
    }
}

func main() {
    dat, err := ioutil.ReadFile("data.csv")
    check(err)

    s := strings.Split(string(dat), "\n")
    fmt.Println(s)

}

