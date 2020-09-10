variable "SIZE" {}
variable "IMAGE" {}

resource "digitalocean_droplet" "myweb" {
    image = var.IMAGE
    name = "web-3"
    region = "nyc1"
    size = var.SIZE
}
