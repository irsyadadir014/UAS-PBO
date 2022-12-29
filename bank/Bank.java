package com.bank.bank;

import java.util.Scanner;
public class Bank {

    public static void main(String[] args) {
        BankBeraksi bank = new BankBeraksi();
        Scanner input = new Scanner (System.in);
        System.out.println("Selamat Datang di Bank ABC");
        System.out.println("Saldo saat ini : Rp. " +  bank.getsaldo());
        System.out.print("\n");
        System.out.print("Simpan Uang : Rp. ");
        int tambahsaldo=input.nextInt();
        bank.simpanuang(tambahsaldo);
        System.out.println("Saldo saat ini : Rp. " + bank.getsaldo());
        System.out.print("\n");
        System.out.print("Ambil Uang : Rp. ");
        int ambilSaldo=input.nextInt();
        bank.ambiluang(ambilSaldo);
        System.out.println("Saldo saat ini : Rp. " + bank.getsaldo());
    }
}
