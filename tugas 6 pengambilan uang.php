public class PengambilanUang {
    private int saldo;
    private int proteksi;
    private int tingkatBunga;

    public PengambilanUang(int saldo, int proteksi, int tingkatBunga) {
        this.saldo = saldo;
        this.proteksi = proteksi;
        this.tingkatBunga = tingkatBunga;
    }

    public int getSaldo() {
        return saldo;
    }

    public boolean ambilUang(int jumlah) {
        if (saldo - jumlah >= proteksi) {
            saldo -= jumlah;
            return true;
        } else {
            return false;
        }
    }
}
Listing code :
import Perbankan.PengambilanUang;
public class TesTugas {
    public static void main(String args[]) {
        PengambilanUang tabungan = new PengambilanUang(5000, 1000, 2);
        System.out.println("Uang yang ditabung : 5000");
        System.out.println("Uang yang diproteksi : 1000");
        System.out.println(" ");
        System.out.println("Uang yang akan diambil : 4500 " + tabungan.ambilUang(4500));
        System.out.println("Saldo sekarang : " + tabungan.getSaldo());
        System.out.println(" ");
        System.out.println("Uang yang akan diambil : 2500 " + tabungan.ambilUang(2500));
        System.out.println("Saldo sekarang : " + tabungan.getSaldo());
    }
}