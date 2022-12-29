package Inheritance;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        // bangun datar
        System.out.println("Program Java");
        BangunDatar bangunDatar = new BangunDatar();
        bangunDatar.luas();
        bangunDatar.keliling();
        System.out.println("1. Persegi");
        System.out.println("2. Lingkaran");
        System.out.println("3. Persegi panjang");
        System.out.println("4. Segitiga");
        System.out.print("Ingin menghitung bangun datar apa : ");
        int plh = input.nextInt();
        System.out.print("\n");
        if (plh == 1){
            System.out.println("Program untuk menghitung persegi");
            // membuat objek persegi dan mengisi nilai properti
            Persegi persegi = new Persegi();
            System.out.print("Masukkan panjang sisi : ");
            persegi.sisi = input.nextInt();

            persegi.luas();
            persegi.keliling();
        }
        else if (plh == 2){
            System.out.println("Program untuk menghitung lingkaran");
            // membuat objek Lingkaran dan mengisi nilai properti
            Lingkaran lingkaran = new Lingkaran();
            System.out.print("Masukkan panjang Jari-Jari : ");
            lingkaran.r = input.nextInt();

            lingkaran.luas();
            lingkaran.keliling();
        }
        else if (plh == 3){
            System.out.println("Program untuk menghitung persegi panjang");
            // membuat objek Persegi Panjang dan mengisi nilai properti
            PersegiPanjang persegiPanjang = new PersegiPanjang();
            System.out.print("Masukkan panjang : ");
            persegiPanjang.panjang = input.nextInt();
            System.out.print("Masukkan Lebar : ");
            persegiPanjang.lebar = input.nextInt();
            persegiPanjang.luas();
            persegiPanjang.keliling();
        }
        else if (plh == 4){
            System.out.println("Program untuk menghitung segitiga");
            // membuat objek Segitiga dan mengisi nilai properti
            Segitiga Segitiga = new Segitiga();
            System.out.print("Masukkan panjang alas :");
            Segitiga.alas = input.nextInt();
            System.out.print("Masukkan tinggi : ");
            Segitiga.tinggi = input.nextInt();

            Segitiga.luas();
        }
        else {
            System.out.println("Eror....!");
            System.out.println("Inputan tidak ada dalam pilihan");
        }
    }
}