import java.io.BufferedReader;
import java.io.IOException;
// file reader
import java.io.FileReader;

// regex matcher
import java.util.regex.Matcher;
// regex pattern
import java.util.regex.Pattern;

public class regex {
  public static void main(String[] args) {
    String file = "./files/results.csv";

    // Por que en java el \ en un string ya es un escape para ponerlo en un String hay que escribirlo doble \\
    Pattern pat = Pattern.compile("^2011\\-.*[zk].*$");


    try {
      FileReader fr = new FileReader(file);
      BufferedReader br = new BufferedReader(fr);
      String line;
      while ((line = br.readLine()) != null) {
        Matcher matcher = pat.matcher(line);

        if (matcher.find()) {
          System.out.println(line);
        }

        // System.out.println(line);
      }
    } catch (IOException e) {
      System.out.println("Error reading file");
    }
  }
}