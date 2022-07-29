interface coname {
    static final String tata = "Tata INC";
}

interface coaddress {
    static final String address = "Nariman Point, Mumbai";
}

class employee {
    protected int empid;
    protected String empname;

    employee(int a, String b) {
        empid = a;
        empname = b;
    }

    public void disp() {
        System.out.println("empid: " + empid);
        System.out.println("empname: " + empname);
    }
}

class Wedger extends employee {
    double wedge;
    double nod;

    Wedger(int a, String b, double c, double d) {
        super(a, b);
        this.wedge = c;
        this.nod = d;
    }

    public void disp() {
        super.disp();
        System.out.println("wedge: " + wedge);
        System.out.println("nod: " + nod);
    }
}

// class inharits from employee class and implements coname and coaddress
class Salaried extends employee implements coname, coaddress {
    double basic;
    double da;

    Salaried(int a, String b, double c) {
        super(a, b);
        this.basic = c;
        this.da = c * 0.1;
    }

    public void disp() {
        System.out.println("Company Name: " + tata);
        System.out.println("Company Address: " + address);
        super.disp();
        System.out.println("basic: " + basic);
        System.out.println("da: " + da);
    }
}

public class tryemployee {
    public static void main(String args[]) {
        Wedger obj1 = new Wedger(1, "Johnny", 100.0, 20.0);
        obj1.disp();
        Salaried obj2 = new Salaried(1, "Laalu", 10000);
        obj2.disp();
    }
}