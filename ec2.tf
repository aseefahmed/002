resource "digitalocean_droplet" "myweb" {
    image = "ubuntu-18-04-x64"
    name = "web-3"
    region = "nyc1"
    size = "s-1vcpu-1gb"
}
