import { Component } from '@angular/core';
import { HttpClient} from "@angular/common/http";

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'php2ang';
  data = [];
  constructor(private http: HttpClient){
    this.http.get('http://localhost/api/employee.php').subscribe(data =>{
      this.data.push(data);
      console.log(this.data);
    }, error => console.error(error));
  }
}
