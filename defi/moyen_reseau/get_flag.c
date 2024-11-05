#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <unistd.h>
#include <arpa/inet.h>  // thu vien nay chi dung duoc tren ubuntu/linux

int main() {

    int sock;
    struct sockaddr_in server;

    sock = socket(AF_INET, SOCK_STREAM, 0);
    if (sock == -1) {
        perror("Could not create socket");
        return 1;
    }

    server.sin_family = AF_INET;
    server.sin_port = htons(12345);
    server.sin_addr.s_addr = inet_addr("176.129.192.118");

    if (connect(sock, (struct sockaddr *)&server, sizeof(server)) < 0) {
        perror("Connect failed");
        return 1;
    }

    char server_reply[100];
    int recv_size;
    recv_size = recv(sock, server_reply, sizeof(server_reply) - 1, 0);
    if (recv_size < 0) {
        perror("Receive failed");
        return 1;
    }
    
    server_reply[recv_size] = '\0';
    printf("Received:\n %s\n", server_reply);

    close(sock);
    return 0;

}